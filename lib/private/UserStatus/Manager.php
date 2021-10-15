<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2020, Georg Ehrke
 *
 * @author Georg Ehrke <oc.list@georgehrke.com>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */
namespace OC\UserStatus;

use OCP\IServerContainer;
use OCP\UserStatus\IManager;
use OCP\UserStatus\IProvider;
use OC\UserStatus\ISettableProvider;
use Psr\Container\ContainerExceptionInterface;
use Psr\Log\LoggerInterface;

class Manager implements IManager {

	/** @var IServerContainer */
	private $container;

	/** @var LoggerInterface */
	private $logger;

	/** @var class-string[] */
	private $providersClass;

	/** @var array<class-string, IProvider> */
	private $providers;

	/**
	 * Manager constructor.
	 *
	 * @param IServerContainer $container
	 * @param LoggerInterface $logger
	 */
	public function __construct(IServerContainer $container,
								LoggerInterface $logger) {
		$this->container = $container;
		$this->logger = $logger;
	}

	/**
	 * @inheritDoc
	 */
	public function getUserStatuses(array $userIds): array {
		$this->setupProvider();
		if (count($this->providers) === 0) {
			return [];
		}

		foreach ($this->providers as $provider) {
			// TODO merge results instead of taking the first one.
			return $provider->getUserStatuses($userIds);
		}
		return [];
	}

	/**
	 * @param class-string $class
	 * @since 20.0.0
	 * @internal
	 */
	public function registerProvider(string $class): void {
		$this->providersClass[] = $class;
	}

	/**
	 * Lazily set up provider
	 */
	private function setupProvider(): void {
		if (count($this->providersClass) === count($this->providers)) {
			return;
		}

		foreach ($this->providersClass as $providerClass) {
			if (array_key_exists($providerClass, $this->providers)) {
				continue;
			}
			try {
				$this->providers[$providerClass] = $this->container->get($providerClass);
			} catch (ContainerExceptionInterface $e) {
				$this->logger->error('Could not load user-status "' . $this->providersClass . '" provider dynamically: ' . $e->getMessage(), [
					'exception' => $e,
				]);
				continue;
			}
		}
	}

	public function setUserStatus(string $userId, string $messageId, string $status, bool $createBackup = false): void {
		$this->setupProvider();
		foreach ($this->providers as $provider) {
			if (!$provider || !($provider instanceof ISettableProvider)) {
				continue;
			}

			$provider->setUserStatus($userId, $messageId, $status, $createBackup);
		}
	}

	public function revertUserStatus(string $userId, string $messageId, string $status): void {
		$this->setupProvider();
		foreach ($this->providers as $provider) {
			if (!$provider || !($provider instanceof ISettableProvider)) {
				continue;
			}
			$provider->revertUserStatus($userId, $messageId, $status);
		}
	}
}
