<?php

// $wgWBRepoSettings['specialSiteLinkGroups'] = [ 'Commons' ];
$wgWBClientSettings['repoScriptPath'] = '';
$wgWBClientSettings['repoArticlePath'] = '/wiki/$1';
$wgWBClientSettings['repoUrl'] = 'https://meta..govnp.tech';
$wgWBClientSettings['repositories']['']['repoDatabase'] = 'nphistorywiki';
$wgWBClientSettings['repositories']['']['changesDatabase'] = 'nphistorywiki';
$wgWBClientSettings['siteLinkGroups'] = [ 'Wikidata' ];
$wgWBClientSettings['siteGroup'] = 'Wikidata';
$wgWBClientSettings['TOOLBAR'] = [ 'Wiki' ];
$wgWBClientSettings['repoSiteName'] = 'Wikidata';
$wgWBClientSettings['repositories'] = [
		'' => [
			'repoDatabase' => 'nphistorywiki',
			'baseUri' => 'https://meta..govnp.tech' . '/entity',
			'entityNamespaces' => [
				'item' => NS_MAIN,
				'property' => NS_MAIN,
			],
			'prefixMapping' => [ '' => '' ],
		]
];
$wgWBClientSettings['repoNamespaces'] = [
	'wikibase-item' => 'Item',
	'wikibase-property' => 'Property',
];
$wgWBClientSettings['purgeCacheBatchSize'] = 100;
$wgWBClientSettings['recentChangesBatchSize'] = 100;
$wgMediaInfoProperties = [
	'depicts' => 'P122',
];
