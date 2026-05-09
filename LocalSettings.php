<?php

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

include('/home/sourklou/mediawiki/private.php');
$wgShowExceptionDetails = true;
$wgShowDBErrorBacktrace = true;
# Choose the right wiki to show
if ( defined( 'MW_DB' ) ) {
    $wikiId = MW_DB;
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'meta.govnp.tech') {
    $wikiId = 'nphistorywiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'history.govnp.tech') {
    $wikiId = 'historywiki';
} else {
    echo 'Unable to determine $wikiId'."\n";
    exit(1);
}

$wgSitename = $wikiId;

## The protocol and server name to use in fully-qualified URLs

$wgServer = [
    // if you want to allow also usage of https, just use '//localhost'
    // and set 'http://localhost' at 'wgCanonicalServer'
    'default' => 'https://localhost',
	'nphistorywiki' => 'https://meta.govnp.tech',
	'historywiki' => 'https://history.govnp.tech',
];

## The URL path to the logo.  Make sure you change this from the default,

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBname = $wikiId;
$wgDBuser = $DBuser;
$wgDBpassword = $DBpassword;
# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;
# Read wiki lists
$wgLocalDatabases = array(
	'nphistorywiki',
	'historywiki',
);

## Cache
$wgMainCacheType = CACHE_ACCEL;
$wgParserCacheType = CACHE_ACCEL;
$wgMessageCacheType = CACHE_ACCEL;
// $wgSessionCacheType = 'redis';
// $wgDebugLogFile = "error.log";
$wgParserCacheExpireTime = 2592000;
$wgResourceLoaderMaxage = array('server' => 30 * 24 * 60 * 60, 'client' => 30 * 24 * 60 * 60);
$wgEnableSidebarCache = true;
$wgShowIPinHeader = false;

// require_once( '/home/sourklou/mediawiki/LocalExtensions.php' );
$wgCentralAuthDatabase = 'centralauth';

$conf = new SiteConfiguration;
$wgConf->wikis = $wgLocalDatabases;
$wgConf->suffixes = [ 'wiki' ];
$wgConf->localVHosts = [ 'localhost', $wgHostCentral ];
$wgLocalVirtualHosts = array( $wgHostCentral );
$wmgHostname = isset( $_SERVER['HTTP_HOST'] ) ? $_SERVER['HTTP_HOST'] : 'undefined';
include('GlobalSkins.php');
include('GlobalConfig.php');
include('InitialiseSettings.php');
function efGetSiteParams( $conf, $wiki ) {
    $site = null;
    $lang = null;
    foreach( $conf->suffixes as $suffix ) {
        if ( substr( $wiki, -strlen( $suffix ) ) == $suffix ) {
            $site = $suffix;
            $lang = substr( $wiki, 0, -strlen( $suffix ) );
            break;
        }
    }
    return array(
        'suffix' => $site,
        'lang' => $lang,
        'params' => array(
            'lang' => $lang,
            'site' => $site,
            'wiki' => $wiki,
        ),
        'tags' => array(),
    );
}
$wgConf->suffixes = $wgLocalDatabases;
$wgConf->siteParamsCallback = 'efGetSiteParams';
$wgConf->extractAllGlobals( $wgDBname );
## Error reporting
$wgShowExceptionDetails = true;
$wgShowDBErrorBacktrace = true;
$wgDefaultUserOptions['usenewrc'] =0;
