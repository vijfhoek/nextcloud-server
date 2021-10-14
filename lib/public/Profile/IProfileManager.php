<?php

declare(strict_types=1);

/**
 * @copyright 2021 Christopher Ng <chrng8@gmail.com>
 *
 * @author Christopher Ng <chrng8@gmail.com>
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

namespace OCP\Profile;

use OCP\IUser;

/**
 * @since 23.0.0
 */
interface IProfileManager {

	/**
	 * Add an action to the registration queue
	 *
	 * @since 23.0.0
	 */
	public function queueAction(string $actionClass): void;

	/**
	 * Returns the profile parameters visible to the visiting user in an
	 * associative array
	 *
	 * @since 23.0.0
	 */
	public function getProfileParams(IUser $targetUser, ?IUser $visitingUser): array;

	/**
	 * Returns the profile config in an associative array. If a profile config
	 * does not exist for the targetUser a default profile config is created
	 *
	 * @since 23.0.0
	 */
	public function getProfileConfig(IUser $targetUser, ?IUser $visitingUser): array;
}
