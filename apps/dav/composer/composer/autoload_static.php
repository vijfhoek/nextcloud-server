<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitDAV
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OCA\\DAV\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OCA\\DAV\\' => 
        array (
            0 => __DIR__ . '/..' . '/../lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'OCA\\DAV\\AppInfo\\Application' => __DIR__ . '/..' . '/../lib/AppInfo/Application.php',
        'OCA\\DAV\\AppInfo\\PluginManager' => __DIR__ . '/..' . '/../lib/AppInfo/PluginManager.php',
        'OCA\\DAV\\Avatars\\AvatarHome' => __DIR__ . '/..' . '/../lib/Avatars/AvatarHome.php',
        'OCA\\DAV\\Avatars\\AvatarNode' => __DIR__ . '/..' . '/../lib/Avatars/AvatarNode.php',
        'OCA\\DAV\\Avatars\\RootCollection' => __DIR__ . '/..' . '/../lib/Avatars/RootCollection.php',
        'OCA\\DAV\\BackgroundJob\\BuildReminderIndexBackgroundJob' => __DIR__ . '/..' . '/../lib/BackgroundJob/BuildReminderIndexBackgroundJob.php',
        'OCA\\DAV\\BackgroundJob\\CalendarRetentionJob' => __DIR__ . '/..' . '/../lib/BackgroundJob/CalendarRetentionJob.php',
        'OCA\\DAV\\BackgroundJob\\CleanupDirectLinksJob' => __DIR__ . '/..' . '/../lib/BackgroundJob/CleanupDirectLinksJob.php',
        'OCA\\DAV\\BackgroundJob\\CleanupInvitationTokenJob' => __DIR__ . '/..' . '/../lib/BackgroundJob/CleanupInvitationTokenJob.php',
        'OCA\\DAV\\BackgroundJob\\EventReminderJob' => __DIR__ . '/..' . '/../lib/BackgroundJob/EventReminderJob.php',
        'OCA\\DAV\\BackgroundJob\\GenerateBirthdayCalendarBackgroundJob' => __DIR__ . '/..' . '/../lib/BackgroundJob/GenerateBirthdayCalendarBackgroundJob.php',
        'OCA\\DAV\\BackgroundJob\\RefreshWebcalJob' => __DIR__ . '/..' . '/../lib/BackgroundJob/RefreshWebcalJob.php',
        'OCA\\DAV\\BackgroundJob\\RegisterRegenerateBirthdayCalendars' => __DIR__ . '/..' . '/../lib/BackgroundJob/RegisterRegenerateBirthdayCalendars.php',
        'OCA\\DAV\\BackgroundJob\\UpdateCalendarResourcesRoomsBackgroundJob' => __DIR__ . '/..' . '/../lib/BackgroundJob/UpdateCalendarResourcesRoomsBackgroundJob.php',
        'OCA\\DAV\\BackgroundJob\\UploadCleanup' => __DIR__ . '/..' . '/../lib/BackgroundJob/UploadCleanup.php',
        'OCA\\DAV\\CalDAV\\Activity\\Backend' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Backend.php',
        'OCA\\DAV\\CalDAV\\Activity\\Filter\\Calendar' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Filter/Calendar.php',
        'OCA\\DAV\\CalDAV\\Activity\\Filter\\Todo' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Filter/Todo.php',
        'OCA\\DAV\\CalDAV\\Activity\\Provider\\Base' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Provider/Base.php',
        'OCA\\DAV\\CalDAV\\Activity\\Provider\\Calendar' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Provider/Calendar.php',
        'OCA\\DAV\\CalDAV\\Activity\\Provider\\Event' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Provider/Event.php',
        'OCA\\DAV\\CalDAV\\Activity\\Provider\\Todo' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Provider/Todo.php',
        'OCA\\DAV\\CalDAV\\Activity\\Setting\\CalDAVSetting' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Setting/CalDAVSetting.php',
        'OCA\\DAV\\CalDAV\\Activity\\Setting\\Calendar' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Setting/Calendar.php',
        'OCA\\DAV\\CalDAV\\Activity\\Setting\\Event' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Setting/Event.php',
        'OCA\\DAV\\CalDAV\\Activity\\Setting\\Todo' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Setting/Todo.php',
        'OCA\\DAV\\CalDAV\\BirthdayCalendar\\EnablePlugin' => __DIR__ . '/..' . '/../lib/CalDAV/BirthdayCalendar/EnablePlugin.php',
        'OCA\\DAV\\CalDAV\\BirthdayService' => __DIR__ . '/..' . '/../lib/CalDAV/BirthdayService.php',
        'OCA\\DAV\\CalDAV\\CachedSubscription' => __DIR__ . '/..' . '/../lib/CalDAV/CachedSubscription.php',
        'OCA\\DAV\\CalDAV\\CachedSubscriptionObject' => __DIR__ . '/..' . '/../lib/CalDAV/CachedSubscriptionObject.php',
        'OCA\\DAV\\CalDAV\\CalDavBackend' => __DIR__ . '/..' . '/../lib/CalDAV/CalDavBackend.php',
        'OCA\\DAV\\CalDAV\\Calendar' => __DIR__ . '/..' . '/../lib/CalDAV/Calendar.php',
        'OCA\\DAV\\CalDAV\\CalendarHome' => __DIR__ . '/..' . '/../lib/CalDAV/CalendarHome.php',
        'OCA\\DAV\\CalDAV\\CalendarImpl' => __DIR__ . '/..' . '/../lib/CalDAV/CalendarImpl.php',
        'OCA\\DAV\\CalDAV\\CalendarManager' => __DIR__ . '/..' . '/../lib/CalDAV/CalendarManager.php',
        'OCA\\DAV\\CalDAV\\CalendarObject' => __DIR__ . '/..' . '/../lib/CalDAV/CalendarObject.php',
        'OCA\\DAV\\CalDAV\\CalendarProvider' => __DIR__ . '/..' . '/../lib/CalDAV/CalendarProvider.php',
        'OCA\\DAV\\CalDAV\\CalendarRoot' => __DIR__ . '/..' . '/../lib/CalDAV/CalendarRoot.php',
        'OCA\\DAV\\CalDAV\\ICSExportPlugin\\ICSExportPlugin' => __DIR__ . '/..' . '/../lib/CalDAV/ICSExportPlugin/ICSExportPlugin.php',
        'OCA\\DAV\\CalDAV\\IRestorable' => __DIR__ . '/..' . '/../lib/CalDAV/IRestorable.php',
        'OCA\\DAV\\CalDAV\\Integration\\ExternalCalendar' => __DIR__ . '/..' . '/../lib/CalDAV/Integration/ExternalCalendar.php',
        'OCA\\DAV\\CalDAV\\Integration\\ICalendarProvider' => __DIR__ . '/..' . '/../lib/CalDAV/Integration/ICalendarProvider.php',
        'OCA\\DAV\\CalDAV\\InvitationResponse\\InvitationResponseServer' => __DIR__ . '/..' . '/../lib/CalDAV/InvitationResponse/InvitationResponseServer.php',
        'OCA\\DAV\\CalDAV\\Outbox' => __DIR__ . '/..' . '/../lib/CalDAV/Outbox.php',
        'OCA\\DAV\\CalDAV\\Plugin' => __DIR__ . '/..' . '/../lib/CalDAV/Plugin.php',
        'OCA\\DAV\\CalDAV\\Principal\\Collection' => __DIR__ . '/..' . '/../lib/CalDAV/Principal/Collection.php',
        'OCA\\DAV\\CalDAV\\Principal\\User' => __DIR__ . '/..' . '/../lib/CalDAV/Principal/User.php',
        'OCA\\DAV\\CalDAV\\Proxy\\Proxy' => __DIR__ . '/..' . '/../lib/CalDAV/Proxy/Proxy.php',
        'OCA\\DAV\\CalDAV\\Proxy\\ProxyMapper' => __DIR__ . '/..' . '/../lib/CalDAV/Proxy/ProxyMapper.php',
        'OCA\\DAV\\CalDAV\\PublicCalendar' => __DIR__ . '/..' . '/../lib/CalDAV/PublicCalendar.php',
        'OCA\\DAV\\CalDAV\\PublicCalendarObject' => __DIR__ . '/..' . '/../lib/CalDAV/PublicCalendarObject.php',
        'OCA\\DAV\\CalDAV\\PublicCalendarRoot' => __DIR__ . '/..' . '/../lib/CalDAV/PublicCalendarRoot.php',
        'OCA\\DAV\\CalDAV\\Publishing\\PublishPlugin' => __DIR__ . '/..' . '/../lib/CalDAV/Publishing/PublishPlugin.php',
        'OCA\\DAV\\CalDAV\\Publishing\\Xml\\Publisher' => __DIR__ . '/..' . '/../lib/CalDAV/Publishing/Xml/Publisher.php',
        'OCA\\DAV\\CalDAV\\Reminder\\Backend' => __DIR__ . '/..' . '/../lib/CalDAV/Reminder/Backend.php',
        'OCA\\DAV\\CalDAV\\Reminder\\INotificationProvider' => __DIR__ . '/..' . '/../lib/CalDAV/Reminder/INotificationProvider.php',
        'OCA\\DAV\\CalDAV\\Reminder\\NotificationProviderManager' => __DIR__ . '/..' . '/../lib/CalDAV/Reminder/NotificationProviderManager.php',
        'OCA\\DAV\\CalDAV\\Reminder\\NotificationProvider\\AbstractProvider' => __DIR__ . '/..' . '/../lib/CalDAV/Reminder/NotificationProvider/AbstractProvider.php',
        'OCA\\DAV\\CalDAV\\Reminder\\NotificationProvider\\AudioProvider' => __DIR__ . '/..' . '/../lib/CalDAV/Reminder/NotificationProvider/AudioProvider.php',
        'OCA\\DAV\\CalDAV\\Reminder\\NotificationProvider\\EmailProvider' => __DIR__ . '/..' . '/../lib/CalDAV/Reminder/NotificationProvider/EmailProvider.php',
        'OCA\\DAV\\CalDAV\\Reminder\\NotificationProvider\\ProviderNotAvailableException' => __DIR__ . '/..' . '/../lib/CalDAV/Reminder/NotificationProvider/ProviderNotAvailableException.php',
        'OCA\\DAV\\CalDAV\\Reminder\\NotificationProvider\\PushProvider' => __DIR__ . '/..' . '/../lib/CalDAV/Reminder/NotificationProvider/PushProvider.php',
        'OCA\\DAV\\CalDAV\\Reminder\\NotificationTypeDoesNotExistException' => __DIR__ . '/..' . '/../lib/CalDAV/Reminder/NotificationTypeDoesNotExistException.php',
        'OCA\\DAV\\CalDAV\\Reminder\\Notifier' => __DIR__ . '/..' . '/../lib/CalDAV/Reminder/Notifier.php',
        'OCA\\DAV\\CalDAV\\Reminder\\ReminderService' => __DIR__ . '/..' . '/../lib/CalDAV/Reminder/ReminderService.php',
        'OCA\\DAV\\CalDAV\\ResourceBooking\\AbstractPrincipalBackend' => __DIR__ . '/..' . '/../lib/CalDAV/ResourceBooking/AbstractPrincipalBackend.php',
        'OCA\\DAV\\CalDAV\\ResourceBooking\\ResourcePrincipalBackend' => __DIR__ . '/..' . '/../lib/CalDAV/ResourceBooking/ResourcePrincipalBackend.php',
        'OCA\\DAV\\CalDAV\\ResourceBooking\\RoomPrincipalBackend' => __DIR__ . '/..' . '/../lib/CalDAV/ResourceBooking/RoomPrincipalBackend.php',
        'OCA\\DAV\\CalDAV\\RetentionService' => __DIR__ . '/..' . '/../lib/CalDAV/RetentionService.php',
        'OCA\\DAV\\CalDAV\\Schedule\\IMipPlugin' => __DIR__ . '/..' . '/../lib/CalDAV/Schedule/IMipPlugin.php',
        'OCA\\DAV\\CalDAV\\Schedule\\Plugin' => __DIR__ . '/..' . '/../lib/CalDAV/Schedule/Plugin.php',
        'OCA\\DAV\\CalDAV\\Search\\SearchPlugin' => __DIR__ . '/..' . '/../lib/CalDAV/Search/SearchPlugin.php',
        'OCA\\DAV\\CalDAV\\Search\\Xml\\Filter\\CompFilter' => __DIR__ . '/..' . '/../lib/CalDAV/Search/Xml/Filter/CompFilter.php',
        'OCA\\DAV\\CalDAV\\Search\\Xml\\Filter\\LimitFilter' => __DIR__ . '/..' . '/../lib/CalDAV/Search/Xml/Filter/LimitFilter.php',
        'OCA\\DAV\\CalDAV\\Search\\Xml\\Filter\\OffsetFilter' => __DIR__ . '/..' . '/../lib/CalDAV/Search/Xml/Filter/OffsetFilter.php',
        'OCA\\DAV\\CalDAV\\Search\\Xml\\Filter\\ParamFilter' => __DIR__ . '/..' . '/../lib/CalDAV/Search/Xml/Filter/ParamFilter.php',
        'OCA\\DAV\\CalDAV\\Search\\Xml\\Filter\\PropFilter' => __DIR__ . '/..' . '/../lib/CalDAV/Search/Xml/Filter/PropFilter.php',
        'OCA\\DAV\\CalDAV\\Search\\Xml\\Filter\\SearchTermFilter' => __DIR__ . '/..' . '/../lib/CalDAV/Search/Xml/Filter/SearchTermFilter.php',
        'OCA\\DAV\\CalDAV\\Search\\Xml\\Request\\CalendarSearchReport' => __DIR__ . '/..' . '/../lib/CalDAV/Search/Xml/Request/CalendarSearchReport.php',
        'OCA\\DAV\\CalDAV\\Trashbin\\DeletedCalendarObject' => __DIR__ . '/..' . '/../lib/CalDAV/Trashbin/DeletedCalendarObject.php',
        'OCA\\DAV\\CalDAV\\Trashbin\\DeletedCalendarObjectsCollection' => __DIR__ . '/..' . '/../lib/CalDAV/Trashbin/DeletedCalendarObjectsCollection.php',
        'OCA\\DAV\\CalDAV\\Trashbin\\Plugin' => __DIR__ . '/..' . '/../lib/CalDAV/Trashbin/Plugin.php',
        'OCA\\DAV\\CalDAV\\Trashbin\\RestoreTarget' => __DIR__ . '/..' . '/../lib/CalDAV/Trashbin/RestoreTarget.php',
        'OCA\\DAV\\CalDAV\\Trashbin\\TrashbinHome' => __DIR__ . '/..' . '/../lib/CalDAV/Trashbin/TrashbinHome.php',
        'OCA\\DAV\\CalDAV\\WebcalCaching\\Plugin' => __DIR__ . '/..' . '/../lib/CalDAV/WebcalCaching/Plugin.php',
        'OCA\\DAV\\CalDAV\\WebcalCaching\\RefreshWebcalService' => __DIR__ . '/..' . '/../lib/CalDAV/WebcalCaching/RefreshWebcalService.php',
        'OCA\\DAV\\Capabilities' => __DIR__ . '/..' . '/../lib/Capabilities.php',
        'OCA\\DAV\\CardDAV\\Activity\\Backend' => __DIR__ . '/..' . '/../lib/CardDAV/Activity/Backend.php',
        'OCA\\DAV\\CardDAV\\Activity\\Filter' => __DIR__ . '/..' . '/../lib/CardDAV/Activity/Filter.php',
        'OCA\\DAV\\CardDAV\\Activity\\Provider\\Addressbook' => __DIR__ . '/..' . '/../lib/CardDAV/Activity/Provider/Addressbook.php',
        'OCA\\DAV\\CardDAV\\Activity\\Provider\\Base' => __DIR__ . '/..' . '/../lib/CardDAV/Activity/Provider/Base.php',
        'OCA\\DAV\\CardDAV\\Activity\\Provider\\Card' => __DIR__ . '/..' . '/../lib/CardDAV/Activity/Provider/Card.php',
        'OCA\\DAV\\CardDAV\\Activity\\Setting' => __DIR__ . '/..' . '/../lib/CardDAV/Activity/Setting.php',
        'OCA\\DAV\\CardDAV\\AddressBook' => __DIR__ . '/..' . '/../lib/CardDAV/AddressBook.php',
        'OCA\\DAV\\CardDAV\\AddressBookImpl' => __DIR__ . '/..' . '/../lib/CardDAV/AddressBookImpl.php',
        'OCA\\DAV\\CardDAV\\AddressBookRoot' => __DIR__ . '/..' . '/../lib/CardDAV/AddressBookRoot.php',
        'OCA\\DAV\\CardDAV\\CardDavBackend' => __DIR__ . '/..' . '/../lib/CardDAV/CardDavBackend.php',
        'OCA\\DAV\\CardDAV\\ContactsManager' => __DIR__ . '/..' . '/../lib/CardDAV/ContactsManager.php',
        'OCA\\DAV\\CardDAV\\Converter' => __DIR__ . '/..' . '/../lib/CardDAV/Converter.php',
        'OCA\\DAV\\CardDAV\\HasPhotoPlugin' => __DIR__ . '/..' . '/../lib/CardDAV/HasPhotoPlugin.php',
        'OCA\\DAV\\CardDAV\\ImageExportPlugin' => __DIR__ . '/..' . '/../lib/CardDAV/ImageExportPlugin.php',
        'OCA\\DAV\\CardDAV\\Integration\\ExternalAddressBook' => __DIR__ . '/..' . '/../lib/CardDAV/Integration/ExternalAddressBook.php',
        'OCA\\DAV\\CardDAV\\Integration\\IAddressBookProvider' => __DIR__ . '/..' . '/../lib/CardDAV/Integration/IAddressBookProvider.php',
        'OCA\\DAV\\CardDAV\\MultiGetExportPlugin' => __DIR__ . '/..' . '/../lib/CardDAV/MultiGetExportPlugin.php',
        'OCA\\DAV\\CardDAV\\PhotoCache' => __DIR__ . '/..' . '/../lib/CardDAV/PhotoCache.php',
        'OCA\\DAV\\CardDAV\\Plugin' => __DIR__ . '/..' . '/../lib/CardDAV/Plugin.php',
        'OCA\\DAV\\CardDAV\\SyncService' => __DIR__ . '/..' . '/../lib/CardDAV/SyncService.php',
        'OCA\\DAV\\CardDAV\\SystemAddressbook' => __DIR__ . '/..' . '/../lib/CardDAV/SystemAddressbook.php',
        'OCA\\DAV\\CardDAV\\UserAddressBooks' => __DIR__ . '/..' . '/../lib/CardDAV/UserAddressBooks.php',
        'OCA\\DAV\\CardDAV\\Xml\\Groups' => __DIR__ . '/..' . '/../lib/CardDAV/Xml/Groups.php',
        'OCA\\DAV\\Command\\CreateAddressBook' => __DIR__ . '/..' . '/../lib/Command/CreateAddressBook.php',
        'OCA\\DAV\\Command\\CreateCalendar' => __DIR__ . '/..' . '/../lib/Command/CreateCalendar.php',
        'OCA\\DAV\\Command\\DeleteCalendar' => __DIR__ . '/..' . '/../lib/Command/DeleteCalendar.php',
        'OCA\\DAV\\Command\\ListCalendars' => __DIR__ . '/..' . '/../lib/Command/ListCalendars.php',
        'OCA\\DAV\\Command\\MoveCalendar' => __DIR__ . '/..' . '/../lib/Command/MoveCalendar.php',
        'OCA\\DAV\\Command\\RemoveInvalidShares' => __DIR__ . '/..' . '/../lib/Command/RemoveInvalidShares.php',
        'OCA\\DAV\\Command\\RetentionCleanupCommand' => __DIR__ . '/..' . '/../lib/Command/RetentionCleanupCommand.php',
        'OCA\\DAV\\Command\\SendEventReminders' => __DIR__ . '/..' . '/../lib/Command/SendEventReminders.php',
        'OCA\\DAV\\Command\\SyncBirthdayCalendar' => __DIR__ . '/..' . '/../lib/Command/SyncBirthdayCalendar.php',
        'OCA\\DAV\\Command\\SyncSystemAddressBook' => __DIR__ . '/..' . '/../lib/Command/SyncSystemAddressBook.php',
        'OCA\\DAV\\Comments\\CommentNode' => __DIR__ . '/..' . '/../lib/Comments/CommentNode.php',
        'OCA\\DAV\\Comments\\CommentsPlugin' => __DIR__ . '/..' . '/../lib/Comments/CommentsPlugin.php',
        'OCA\\DAV\\Comments\\EntityCollection' => __DIR__ . '/..' . '/../lib/Comments/EntityCollection.php',
        'OCA\\DAV\\Comments\\EntityTypeCollection' => __DIR__ . '/..' . '/../lib/Comments/EntityTypeCollection.php',
        'OCA\\DAV\\Comments\\RootCollection' => __DIR__ . '/..' . '/../lib/Comments/RootCollection.php',
        'OCA\\DAV\\Connector\\LegacyDAVACL' => __DIR__ . '/..' . '/../lib/Connector/LegacyDAVACL.php',
        'OCA\\DAV\\Connector\\PublicAuth' => __DIR__ . '/..' . '/../lib/Connector/PublicAuth.php',
        'OCA\\DAV\\Connector\\Sabre\\AnonymousOptionsPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/AnonymousOptionsPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\AppEnabledPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/AppEnabledPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\Auth' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Auth.php',
        'OCA\\DAV\\Connector\\Sabre\\BearerAuth' => __DIR__ . '/..' . '/../lib/Connector/Sabre/BearerAuth.php',
        'OCA\\DAV\\Connector\\Sabre\\BlockLegacyClientPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/BlockLegacyClientPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\CachingTree' => __DIR__ . '/..' . '/../lib/Connector/Sabre/CachingTree.php',
        'OCA\\DAV\\Connector\\Sabre\\ChecksumList' => __DIR__ . '/..' . '/../lib/Connector/Sabre/ChecksumList.php',
        'OCA\\DAV\\Connector\\Sabre\\CommentPropertiesPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/CommentPropertiesPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\CopyEtagHeaderPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/CopyEtagHeaderPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\DavAclPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/DavAclPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\Directory' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Directory.php',
        'OCA\\DAV\\Connector\\Sabre\\DummyGetResponsePlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/DummyGetResponsePlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\ExceptionLoggerPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/ExceptionLoggerPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\Exception\\EntityTooLarge' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Exception/EntityTooLarge.php',
        'OCA\\DAV\\Connector\\Sabre\\Exception\\FileLocked' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Exception/FileLocked.php',
        'OCA\\DAV\\Connector\\Sabre\\Exception\\Forbidden' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Exception/Forbidden.php',
        'OCA\\DAV\\Connector\\Sabre\\Exception\\InvalidPath' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Exception/InvalidPath.php',
        'OCA\\DAV\\Connector\\Sabre\\Exception\\PasswordLoginForbidden' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Exception/PasswordLoginForbidden.php',
        'OCA\\DAV\\Connector\\Sabre\\Exception\\UnsupportedMediaType' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Exception/UnsupportedMediaType.php',
        'OCA\\DAV\\Connector\\Sabre\\FakeLockerPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/FakeLockerPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\File' => __DIR__ . '/..' . '/../lib/Connector/Sabre/File.php',
        'OCA\\DAV\\Connector\\Sabre\\FilesPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/FilesPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\FilesReportPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/FilesReportPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\LockPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/LockPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\MaintenancePlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/MaintenancePlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\Node' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Node.php',
        'OCA\\DAV\\Connector\\Sabre\\ObjectTree' => __DIR__ . '/..' . '/../lib/Connector/Sabre/ObjectTree.php',
        'OCA\\DAV\\Connector\\Sabre\\Principal' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Principal.php',
        'OCA\\DAV\\Connector\\Sabre\\PropfindCompressionPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/PropfindCompressionPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\QuotaPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/QuotaPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\Server' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Server.php',
        'OCA\\DAV\\Connector\\Sabre\\ServerFactory' => __DIR__ . '/..' . '/../lib/Connector/Sabre/ServerFactory.php',
        'OCA\\DAV\\Connector\\Sabre\\ShareTypeList' => __DIR__ . '/..' . '/../lib/Connector/Sabre/ShareTypeList.php',
        'OCA\\DAV\\Connector\\Sabre\\ShareeList' => __DIR__ . '/..' . '/../lib/Connector/Sabre/ShareeList.php',
        'OCA\\DAV\\Connector\\Sabre\\SharesPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/SharesPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\TagList' => __DIR__ . '/..' . '/../lib/Connector/Sabre/TagList.php',
        'OCA\\DAV\\Connector\\Sabre\\TagsPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/TagsPlugin.php',
        'OCA\\DAV\\Controller\\BirthdayCalendarController' => __DIR__ . '/..' . '/../lib/Controller/BirthdayCalendarController.php',
        'OCA\\DAV\\Controller\\DirectController' => __DIR__ . '/..' . '/../lib/Controller/DirectController.php',
        'OCA\\DAV\\Controller\\InvitationResponseController' => __DIR__ . '/..' . '/../lib/Controller/InvitationResponseController.php',
        'OCA\\DAV\\DAV\\CustomPropertiesBackend' => __DIR__ . '/..' . '/../lib/DAV/CustomPropertiesBackend.php',
        'OCA\\DAV\\DAV\\GroupPrincipalBackend' => __DIR__ . '/..' . '/../lib/DAV/GroupPrincipalBackend.php',
        'OCA\\DAV\\DAV\\PublicAuth' => __DIR__ . '/..' . '/../lib/DAV/PublicAuth.php',
        'OCA\\DAV\\DAV\\Sharing\\Backend' => __DIR__ . '/..' . '/../lib/DAV/Sharing/Backend.php',
        'OCA\\DAV\\DAV\\Sharing\\IShareable' => __DIR__ . '/..' . '/../lib/DAV/Sharing/IShareable.php',
        'OCA\\DAV\\DAV\\Sharing\\Plugin' => __DIR__ . '/..' . '/../lib/DAV/Sharing/Plugin.php',
        'OCA\\DAV\\DAV\\Sharing\\Xml\\Invite' => __DIR__ . '/..' . '/../lib/DAV/Sharing/Xml/Invite.php',
        'OCA\\DAV\\DAV\\Sharing\\Xml\\ShareRequest' => __DIR__ . '/..' . '/../lib/DAV/Sharing/Xml/ShareRequest.php',
        'OCA\\DAV\\DAV\\SystemPrincipalBackend' => __DIR__ . '/..' . '/../lib/DAV/SystemPrincipalBackend.php',
        'OCA\\DAV\\Db\\Direct' => __DIR__ . '/..' . '/../lib/Db/Direct.php',
        'OCA\\DAV\\Db\\DirectMapper' => __DIR__ . '/..' . '/../lib/Db/DirectMapper.php',
        'OCA\\DAV\\Direct\\DirectFile' => __DIR__ . '/..' . '/../lib/Direct/DirectFile.php',
        'OCA\\DAV\\Direct\\DirectHome' => __DIR__ . '/..' . '/../lib/Direct/DirectHome.php',
        'OCA\\DAV\\Direct\\Server' => __DIR__ . '/..' . '/../lib/Direct/Server.php',
        'OCA\\DAV\\Direct\\ServerFactory' => __DIR__ . '/..' . '/../lib/Direct/ServerFactory.php',
        'OCA\\DAV\\Events\\AddressBookCreatedEvent' => __DIR__ . '/..' . '/../lib/Events/AddressBookCreatedEvent.php',
        'OCA\\DAV\\Events\\AddressBookDeletedEvent' => __DIR__ . '/..' . '/../lib/Events/AddressBookDeletedEvent.php',
        'OCA\\DAV\\Events\\AddressBookShareUpdatedEvent' => __DIR__ . '/..' . '/../lib/Events/AddressBookShareUpdatedEvent.php',
        'OCA\\DAV\\Events\\AddressBookUpdatedEvent' => __DIR__ . '/..' . '/../lib/Events/AddressBookUpdatedEvent.php',
        'OCA\\DAV\\Events\\BeforeFileDirectDownloadedEvent' => __DIR__ . '/..' . '/../lib/Events/BeforeFileDirectDownloadedEvent.php',
        'OCA\\DAV\\Events\\CachedCalendarObjectCreatedEvent' => __DIR__ . '/..' . '/../lib/Events/CachedCalendarObjectCreatedEvent.php',
        'OCA\\DAV\\Events\\CachedCalendarObjectDeletedEvent' => __DIR__ . '/..' . '/../lib/Events/CachedCalendarObjectDeletedEvent.php',
        'OCA\\DAV\\Events\\CachedCalendarObjectUpdatedEvent' => __DIR__ . '/..' . '/../lib/Events/CachedCalendarObjectUpdatedEvent.php',
        'OCA\\DAV\\Events\\CalendarCreatedEvent' => __DIR__ . '/..' . '/../lib/Events/CalendarCreatedEvent.php',
        'OCA\\DAV\\Events\\CalendarDeletedEvent' => __DIR__ . '/..' . '/../lib/Events/CalendarDeletedEvent.php',
        'OCA\\DAV\\Events\\CalendarMovedToTrashEvent' => __DIR__ . '/..' . '/../lib/Events/CalendarMovedToTrashEvent.php',
        'OCA\\DAV\\Events\\CalendarObjectCreatedEvent' => __DIR__ . '/..' . '/../lib/Events/CalendarObjectCreatedEvent.php',
        'OCA\\DAV\\Events\\CalendarObjectDeletedEvent' => __DIR__ . '/..' . '/../lib/Events/CalendarObjectDeletedEvent.php',
        'OCA\\DAV\\Events\\CalendarObjectMovedToTrashEvent' => __DIR__ . '/..' . '/../lib/Events/CalendarObjectMovedToTrashEvent.php',
        'OCA\\DAV\\Events\\CalendarObjectRestoredEvent' => __DIR__ . '/..' . '/../lib/Events/CalendarObjectRestoredEvent.php',
        'OCA\\DAV\\Events\\CalendarObjectUpdatedEvent' => __DIR__ . '/..' . '/../lib/Events/CalendarObjectUpdatedEvent.php',
        'OCA\\DAV\\Events\\CalendarPublishedEvent' => __DIR__ . '/..' . '/../lib/Events/CalendarPublishedEvent.php',
        'OCA\\DAV\\Events\\CalendarRestoredEvent' => __DIR__ . '/..' . '/../lib/Events/CalendarRestoredEvent.php',
        'OCA\\DAV\\Events\\CalendarShareUpdatedEvent' => __DIR__ . '/..' . '/../lib/Events/CalendarShareUpdatedEvent.php',
        'OCA\\DAV\\Events\\CalendarUnpublishedEvent' => __DIR__ . '/..' . '/../lib/Events/CalendarUnpublishedEvent.php',
        'OCA\\DAV\\Events\\CalendarUpdatedEvent' => __DIR__ . '/..' . '/../lib/Events/CalendarUpdatedEvent.php',
        'OCA\\DAV\\Events\\CardCreatedEvent' => __DIR__ . '/..' . '/../lib/Events/CardCreatedEvent.php',
        'OCA\\DAV\\Events\\CardDeletedEvent' => __DIR__ . '/..' . '/../lib/Events/CardDeletedEvent.php',
        'OCA\\DAV\\Events\\CardUpdatedEvent' => __DIR__ . '/..' . '/../lib/Events/CardUpdatedEvent.php',
        'OCA\\DAV\\Events\\SabrePluginAuthInitEvent' => __DIR__ . '/..' . '/../lib/Events/SabrePluginAuthInitEvent.php',
        'OCA\\DAV\\Events\\SubscriptionCreatedEvent' => __DIR__ . '/..' . '/../lib/Events/SubscriptionCreatedEvent.php',
        'OCA\\DAV\\Events\\SubscriptionDeletedEvent' => __DIR__ . '/..' . '/../lib/Events/SubscriptionDeletedEvent.php',
        'OCA\\DAV\\Events\\SubscriptionUpdatedEvent' => __DIR__ . '/..' . '/../lib/Events/SubscriptionUpdatedEvent.php',
        'OCA\\DAV\\Exception\\UnsupportedLimitOnInitialSyncException' => __DIR__ . '/..' . '/../lib/Exception/UnsupportedLimitOnInitialSyncException.php',
        'OCA\\DAV\\Files\\BrowserErrorPagePlugin' => __DIR__ . '/..' . '/../lib/Files/BrowserErrorPagePlugin.php',
        'OCA\\DAV\\Files\\FileSearchBackend' => __DIR__ . '/..' . '/../lib/Files/FileSearchBackend.php',
        'OCA\\DAV\\Files\\FilesHome' => __DIR__ . '/..' . '/../lib/Files/FilesHome.php',
        'OCA\\DAV\\Files\\LazySearchBackend' => __DIR__ . '/..' . '/../lib/Files/LazySearchBackend.php',
        'OCA\\DAV\\Files\\RootCollection' => __DIR__ . '/..' . '/../lib/Files/RootCollection.php',
        'OCA\\DAV\\Files\\Sharing\\FilesDropPlugin' => __DIR__ . '/..' . '/../lib/Files/Sharing/FilesDropPlugin.php',
        'OCA\\DAV\\Files\\Sharing\\PublicLinkCheckPlugin' => __DIR__ . '/..' . '/../lib/Files/Sharing/PublicLinkCheckPlugin.php',
        'OCA\\DAV\\HookManager' => __DIR__ . '/..' . '/../lib/HookManager.php',
        'OCA\\DAV\\Listener\\ActivityUpdaterListener' => __DIR__ . '/..' . '/../lib/Listener/ActivityUpdaterListener.php',
        'OCA\\DAV\\Listener\\AddressbookListener' => __DIR__ . '/..' . '/../lib/Listener/AddressbookListener.php',
        'OCA\\DAV\\Listener\\CalendarContactInteractionListener' => __DIR__ . '/..' . '/../lib/Listener/CalendarContactInteractionListener.php',
        'OCA\\DAV\\Listener\\CalendarDeletionDefaultUpdaterListener' => __DIR__ . '/..' . '/../lib/Listener/CalendarDeletionDefaultUpdaterListener.php',
        'OCA\\DAV\\Listener\\CalendarObjectReminderUpdaterListener' => __DIR__ . '/..' . '/../lib/Listener/CalendarObjectReminderUpdaterListener.php',
        'OCA\\DAV\\Listener\\CardListener' => __DIR__ . '/..' . '/../lib/Listener/CardListener.php',
        'OCA\\DAV\\Migration\\BuildCalendarSearchIndex' => __DIR__ . '/..' . '/../lib/Migration/BuildCalendarSearchIndex.php',
        'OCA\\DAV\\Migration\\BuildCalendarSearchIndexBackgroundJob' => __DIR__ . '/..' . '/../lib/Migration/BuildCalendarSearchIndexBackgroundJob.php',
        'OCA\\DAV\\Migration\\BuildSocialSearchIndex' => __DIR__ . '/..' . '/../lib/Migration/BuildSocialSearchIndex.php',
        'OCA\\DAV\\Migration\\BuildSocialSearchIndexBackgroundJob' => __DIR__ . '/..' . '/../lib/Migration/BuildSocialSearchIndexBackgroundJob.php',
        'OCA\\DAV\\Migration\\CalDAVRemoveEmptyValue' => __DIR__ . '/..' . '/../lib/Migration/CalDAVRemoveEmptyValue.php',
        'OCA\\DAV\\Migration\\ChunkCleanup' => __DIR__ . '/..' . '/../lib/Migration/ChunkCleanup.php',
        'OCA\\DAV\\Migration\\FixBirthdayCalendarComponent' => __DIR__ . '/..' . '/../lib/Migration/FixBirthdayCalendarComponent.php',
        'OCA\\DAV\\Migration\\RefreshWebcalJobRegistrar' => __DIR__ . '/..' . '/../lib/Migration/RefreshWebcalJobRegistrar.php',
        'OCA\\DAV\\Migration\\RegenerateBirthdayCalendars' => __DIR__ . '/..' . '/../lib/Migration/RegenerateBirthdayCalendars.php',
        'OCA\\DAV\\Migration\\RegisterBuildReminderIndexBackgroundJob' => __DIR__ . '/..' . '/../lib/Migration/RegisterBuildReminderIndexBackgroundJob.php',
        'OCA\\DAV\\Migration\\RemoveClassifiedEventActivity' => __DIR__ . '/..' . '/../lib/Migration/RemoveClassifiedEventActivity.php',
        'OCA\\DAV\\Migration\\RemoveDeletedUsersCalendarSubscriptions' => __DIR__ . '/..' . '/../lib/Migration/RemoveDeletedUsersCalendarSubscriptions.php',
        'OCA\\DAV\\Migration\\RemoveOrphanEventsAndContacts' => __DIR__ . '/..' . '/../lib/Migration/RemoveOrphanEventsAndContacts.php',
        'OCA\\DAV\\Migration\\Version1004Date20170825134824' => __DIR__ . '/..' . '/../lib/Migration/Version1004Date20170825134824.php',
        'OCA\\DAV\\Migration\\Version1004Date20170919104507' => __DIR__ . '/..' . '/../lib/Migration/Version1004Date20170919104507.php',
        'OCA\\DAV\\Migration\\Version1004Date20170924124212' => __DIR__ . '/..' . '/../lib/Migration/Version1004Date20170924124212.php',
        'OCA\\DAV\\Migration\\Version1004Date20170926103422' => __DIR__ . '/..' . '/../lib/Migration/Version1004Date20170926103422.php',
        'OCA\\DAV\\Migration\\Version1005Date20180413093149' => __DIR__ . '/..' . '/../lib/Migration/Version1005Date20180413093149.php',
        'OCA\\DAV\\Migration\\Version1005Date20180530124431' => __DIR__ . '/..' . '/../lib/Migration/Version1005Date20180530124431.php',
        'OCA\\DAV\\Migration\\Version1006Date20180619154313' => __DIR__ . '/..' . '/../lib/Migration/Version1006Date20180619154313.php',
        'OCA\\DAV\\Migration\\Version1006Date20180628111625' => __DIR__ . '/..' . '/../lib/Migration/Version1006Date20180628111625.php',
        'OCA\\DAV\\Migration\\Version1008Date20181030113700' => __DIR__ . '/..' . '/../lib/Migration/Version1008Date20181030113700.php',
        'OCA\\DAV\\Migration\\Version1008Date20181105104826' => __DIR__ . '/..' . '/../lib/Migration/Version1008Date20181105104826.php',
        'OCA\\DAV\\Migration\\Version1008Date20181105104833' => __DIR__ . '/..' . '/../lib/Migration/Version1008Date20181105104833.php',
        'OCA\\DAV\\Migration\\Version1008Date20181105110300' => __DIR__ . '/..' . '/../lib/Migration/Version1008Date20181105110300.php',
        'OCA\\DAV\\Migration\\Version1008Date20181105112049' => __DIR__ . '/..' . '/../lib/Migration/Version1008Date20181105112049.php',
        'OCA\\DAV\\Migration\\Version1008Date20181114084440' => __DIR__ . '/..' . '/../lib/Migration/Version1008Date20181114084440.php',
        'OCA\\DAV\\Migration\\Version1011Date20190725113607' => __DIR__ . '/..' . '/../lib/Migration/Version1011Date20190725113607.php',
        'OCA\\DAV\\Migration\\Version1011Date20190806104428' => __DIR__ . '/..' . '/../lib/Migration/Version1011Date20190806104428.php',
        'OCA\\DAV\\Migration\\Version1012Date20190808122342' => __DIR__ . '/..' . '/../lib/Migration/Version1012Date20190808122342.php',
        'OCA\\DAV\\Migration\\Version1016Date20201109085907' => __DIR__ . '/..' . '/../lib/Migration/Version1016Date20201109085907.php',
        'OCA\\DAV\\Migration\\Version1017Date20210216083742' => __DIR__ . '/..' . '/../lib/Migration/Version1017Date20210216083742.php',
        'OCA\\DAV\\Migration\\Version1018Date20210312100735' => __DIR__ . '/..' . '/../lib/Migration/Version1018Date20210312100735.php',
        'OCA\\DAV\\Provisioning\\Apple\\AppleProvisioningNode' => __DIR__ . '/..' . '/../lib/Provisioning/Apple/AppleProvisioningNode.php',
        'OCA\\DAV\\Provisioning\\Apple\\AppleProvisioningPlugin' => __DIR__ . '/..' . '/../lib/Provisioning/Apple/AppleProvisioningPlugin.php',
        'OCA\\DAV\\RootCollection' => __DIR__ . '/..' . '/../lib/RootCollection.php',
        'OCA\\DAV\\Search\\ACalendarSearchProvider' => __DIR__ . '/..' . '/../lib/Search/ACalendarSearchProvider.php',
        'OCA\\DAV\\Search\\ContactsSearchProvider' => __DIR__ . '/..' . '/../lib/Search/ContactsSearchProvider.php',
        'OCA\\DAV\\Search\\EventsSearchProvider' => __DIR__ . '/..' . '/../lib/Search/EventsSearchProvider.php',
        'OCA\\DAV\\Search\\TasksSearchProvider' => __DIR__ . '/..' . '/../lib/Search/TasksSearchProvider.php',
        'OCA\\DAV\\Server' => __DIR__ . '/..' . '/../lib/Server.php',
        'OCA\\DAV\\Settings\\AvailabilitySettings' => __DIR__ . '/..' . '/../lib/Settings/AvailabilitySettings.php',
        'OCA\\DAV\\Settings\\CalDAVSettings' => __DIR__ . '/..' . '/../lib/Settings/CalDAVSettings.php',
        'OCA\\DAV\\Storage\\PublicOwnerWrapper' => __DIR__ . '/..' . '/../lib/Storage/PublicOwnerWrapper.php',
        'OCA\\DAV\\SystemTag\\SystemTagMappingNode' => __DIR__ . '/..' . '/../lib/SystemTag/SystemTagMappingNode.php',
        'OCA\\DAV\\SystemTag\\SystemTagNode' => __DIR__ . '/..' . '/../lib/SystemTag/SystemTagNode.php',
        'OCA\\DAV\\SystemTag\\SystemTagPlugin' => __DIR__ . '/..' . '/../lib/SystemTag/SystemTagPlugin.php',
        'OCA\\DAV\\SystemTag\\SystemTagsByIdCollection' => __DIR__ . '/..' . '/../lib/SystemTag/SystemTagsByIdCollection.php',
        'OCA\\DAV\\SystemTag\\SystemTagsObjectMappingCollection' => __DIR__ . '/..' . '/../lib/SystemTag/SystemTagsObjectMappingCollection.php',
        'OCA\\DAV\\SystemTag\\SystemTagsObjectTypeCollection' => __DIR__ . '/..' . '/../lib/SystemTag/SystemTagsObjectTypeCollection.php',
        'OCA\\DAV\\SystemTag\\SystemTagsRelationsCollection' => __DIR__ . '/..' . '/../lib/SystemTag/SystemTagsRelationsCollection.php',
        'OCA\\DAV\\Traits\\PrincipalProxyTrait' => __DIR__ . '/..' . '/../lib/Traits/PrincipalProxyTrait.php',
        'OCA\\DAV\\Upload\\AssemblyStream' => __DIR__ . '/..' . '/../lib/Upload/AssemblyStream.php',
        'OCA\\DAV\\Upload\\ChunkingPlugin' => __DIR__ . '/..' . '/../lib/Upload/ChunkingPlugin.php',
        'OCA\\DAV\\Upload\\CleanupService' => __DIR__ . '/..' . '/../lib/Upload/CleanupService.php',
        'OCA\\DAV\\Upload\\FutureFile' => __DIR__ . '/..' . '/../lib/Upload/FutureFile.php',
        'OCA\\DAV\\Upload\\RootCollection' => __DIR__ . '/..' . '/../lib/Upload/RootCollection.php',
        'OCA\\DAV\\Upload\\UploadFile' => __DIR__ . '/..' . '/../lib/Upload/UploadFile.php',
        'OCA\\DAV\\Upload\\UploadFolder' => __DIR__ . '/..' . '/../lib/Upload/UploadFolder.php',
        'OCA\\DAV\\Upload\\UploadHome' => __DIR__ . '/..' . '/../lib/Upload/UploadHome.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitDAV::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitDAV::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitDAV::$classMap;

        }, null, ClassLoader::class);
    }
}
