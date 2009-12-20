<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}
/*
if (TYPO3_MODE == 'BE') {
	t3lib_extMgm::addModulePath('tools_txmdbstaticcitiesM1', t3lib_extMgm::extPath($_EXTKEY) . 'mod1/');
		
	t3lib_extMgm::addModule('tools', 'txmdbstaticcitiesM1', '', t3lib_extMgm::extPath($_EXTKEY) . 'mod1/');
}
*/
//$TCA['tx_mdbstaticcities_cities'] = array (
$TCA['static_cities'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities',
		'label'     => 'city',
		'label_alt'     => 'supplement_prefix,name_supplement,supplement_postfix',
		'label_alt_force' => '1',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		//'readOnly' => 1,	// This should always be true, as it prevents the static data from being altered
		'adminOnly' => 1,
		'rootLevel' => 1,
		'is_static' => 1,
		'default_sortby' => 'ORDER BY city',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',	
			'starttime' => 'starttime',	
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_mdbstaticcities_cities.png',
	),
	/*
	'interface' => Array (
		'showRecordFieldList' => 'city,name_supplement', //,supplement_prefix,supplement_postfix,is_capital,countryzone,special_status,longitude,latitude,elevation,zip_start,zip_end,admin_region,kreis_dependency, nn, phonecode, 	car_plate_code, district_key, www, area, population, population_date,population_density,coat_of_arms,coat_of_arms_caption,info_source_links,info_source_caption, nuts,locode',
	)*/
);
?>