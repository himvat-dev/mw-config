<?php
// MediaWiki Central Settings //
include('GlobalExtensions.php');
include('/var/www/nepalwiki/private.php');

$wgConf->settings = [
	'wgServer' => [
		// if you want to allow also usage of https, just use '//localhost'
		// and set 'http://localhost' at 'wgCanonicalServer'
		'default' => 'https://localhost',
		'sourklou_wikiwiki' => 'https://wiki.vikaspedia.org',
		'sourklou_datawiki' => 'https://data.vikaspedia.org',
         'sourklou_loginwiki' => 'https://login.vikaspedia.org',
		],
	'wgCanonicalServer' => [
		'default' => 'https://localhost',
	    	'sourklou_wikiwiki' => 'https://wiki.vikaspedia.org',
	    	'sourklou_datawiki' => 'https://data.vikaspedia.org',
         'sourklou_loginwiki' => 'https://login.vikaspedia.org',
	],
	'wgSitename' => [
		'default' => '',
		'sourklou_enwiki' => 'Vikaspedia',
	    	'sourklou_datawiki' => 'Data Wiki',
	    	'sourklou_wikiwiki'=>'wikiwiki',
	],
	'wgLanguageCode' => [
		'default' => 'en',
		'sourklou_bnwiki'=>'bn',
		'sourklou_hiwiki'=>'hi',
		'sourklou_idwiki'=>'id',
	],
	'wgScriptPath' => [
		'default' => '',
	],
	'wgArticlePath' => [
		'default' => '/wiki/$1',
	],
	// Debugging //
	'wgShowExceptionDetails' => [
		'default' => true,
	],
	'wgShowDBErrorBacktrace' => [
		'default' => true,
	],
	'wgShowDebug' => [
		'default' => false,
	],
	// Database Configuration /
	'wgDBuser' => [
		'default' => 'wikiuser',
	],
	'wgAuthenticationTokenVersion' => [
		'default' => '1',
	],
	'wgDBprefix' => [
		'default' => '',
	],
	'wgAllowSchemaUpdates' => [
		'default' => false,
	],
	'wgDBTableOptions' => [
		'default' => 'ENGINE=InnoDB, DEFAULT CHARSET=binary',
	],
	'wgDBmysql5' => [
		'default' => false,
	],
	'wgDBtype' => [
		'default' => 'mysql',
	],
	
	# Shared memory settings
	'wgCacheDirectory' => [
		'default' => 'cache',
	],
	'wgFileCacheDirectory' => [
		'default' => 'cache',
	],
	'wgUseFileCache' => [
		'default' => true,
	],
	'wgMainCacheType' => [
		'default' => CACHE_ACCEL,
	],
	'wgParserCacheType' => [
		'default' => CACHE_ACCEL,
	],
	'wgMessageCacheType' => [
		'default' => CACHE_ACCEL,
	],
  
         // T3797
	'wgMaxUploadSize' => [
		'default' => 262144000,
	],
	'wgUploadSizeWarning' => [
		'default' => 262144000,
	],
	'wgAllowCopyUploads' => [
		'default' => false,
	],
	'wgCopyUploadsFromSpecialUpload' => [
		'default' => false,
	],
	'wgGenerateThumbnailOnParse' => [
		'default' => false,
	],
	'wgFileExtensions' => [
		'default' => [
			'djvu',
			'gif',
			'ico',
			'jpg',
			'jpeg',
			'ogg',
			'pdf',
			'png',
			'svg',
		],
	],
	'wgUseInstantCommons' => [
		'default' => true,
	],
	'wgMaxImageArea' => [
		'default' => '1.25e7',
	],
	'wgMirahezeCommons' => [
		'default' => true,
	],
	
	# config cache
	'wgResourceBasePath' => [
		'default' => '',
	],
	'wgSharedDB' => [
		'default' => 'nphistorywiki',
	],
	'wgSharedTables' => [
		'default' => [],
	],

	// AbuseFilter
	'wgAbuseFilterActions' => [
		'default' => [
			'block' => true,
			'blockautopromote' => true,
			'degroup' => true,
			'disallow' => true,
			'rangeblock' => false,
			'tag' => true,
			'throttle' => true,
			'warn' => true,
		],
	],
	'wgAbuseFilterCentralDB' => [
		'default' => 'sourklou_metawiki',
	],
	'wgAbuseFilterIsCentral' => [
		'default' => false,
		'metawiki' => true,
	],
	'wgAbuseFilterBlockDuration' => [
		'default' => 'indefinte',
	],
	'wgAbuseFilterAnonBlockDuration' => [
		'default' => 2592000,
	],
	'wgAbuseFilterRestrictions' => [
		'default' => [
			'blockautopromote' => true,
			'block' => true,
			'degroup' => true,
			'rangeblock' => true,
		],
	],
	'wgAbuseFilterNotifications' => [
		'default' => 'udp',
	],
	'wgAbuseFilterLogPrivateDetailsAccess' => [
		'default' => true,
	],
	'wgAbuseFilterPrivateDetailsForceReason' => [
		'default' => true,
	],
	'wgAbuseFilterEmergencyDisableThreshold' => [
		'default' => [
			'default' => 0.60,
		],
	],
	'wgAbuseFilterEmergencyDisableCount' => [
		'default' => [
			'default' => 40,
		],
	],
            
	// CentralAuth // !becarefull
         'wgCentralAuthAutoCreateWikis' => [
		'default' => [
			'sourklou_metawiki',
			'sourklou_loginwiki',
		],
	],
	'wgCentralAuthAutoNew' => [
		'default' => true,
	],
	'wgCentralAuthAutoMigrate' => [
		'default' => true,
	],
	'wgCentralAuthAutoMigrateNonGlobalAccounts' => [
		'default' => true,
	],
	'wgCentralAuthCookies' => [
		'default' => true,
	],
	'wgCentralAuthCookieDomain' => [
		'default' => '.vikaspedia.org',
	],
	'wgCentralAuthDatabase' => [
		'default' => 'sourklou_ca',
	],
	'wgCentralAuthEnableGlobalRenameRequest' => [
		'default' => false,
		'sourklou_metawiki' => true,
	],
	'wgCentralAuthEnableUserMerge' => [
		'default' => false,
		'sourklou_metawiki' => true,
	],
	'wgCentralAuthPreventUnattached' => [
		'default' => true,
	],
	'wgCentralAuthSilentLogin' => [
		'default' => true,
	],
	'wgGlobalRenameBlacklistRegex' => [
		'default' => true
	],
	'wgGlobalRenameBlacklist' => [
		'default' => 'https://meta.wikimedia.org/w/index.php?title=Global_rename_blacklist&action=raw'
	],
	
		// Global Blocking //
		'wgApplyGlobalBlocks' => [
		'default' => true,
		'nphistorywiki' => false,
	],
	'wgGlobalBlockingDatabase' => [
		'default' => 'historywiki', // use mhglobal for global blocks
	],
	
	
