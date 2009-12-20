<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['static_cities'] = array (
	'ctrl' => $TCA['static_cities']['ctrl'],
	'interface'=>array(
		'showRecordFieldList' => 'hidden,starttime,endtime,city,name_supplement,supplement_prefix,supplement_postfix,is_capital,country,countryzone,special_status,longitude,latitude,zip_division,zip_range,zip_list,admin_region,kreis_dependency,nn,phonecode,car_plate_code,district_key,www,area,population,population_date,population_density,coat_of_arms,coat_of_arms_caption,info_source_links,info_source_caption,nuts,locode'
	),
	'feInterface' => $TCA['static_cities']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'starttime' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config'  => array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'default'  => '0',
				'checkbox' => '0'
			)
		),
		'endtime' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config'  => array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0',
				'range'    => array (
					'upper' => mktime(3, 14, 7, 1, 19, 2038),
					'lower' => mktime(0, 0, 0, date('m')-1, date('d'), date('Y'))
				)
			)
		),
		'city' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.city',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required,trim',
			)
		),
		'name_supplement' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.name_supplement',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'trim',
			)
		),
		'supplement_prefix' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.supplement_prefix',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'trim',
			)
		),
		'supplement_postfix' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.supplement_postfix',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'trim',
			)
		),
		'is_capital' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.is_capital',		
			'config' => array (
				'type' => 'check',
				'cols' => 4,
				'items' => array (
					array('LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.is_capital.I.0', ''),
					array('LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.is_capital.I.1', ''),
					array('LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.is_capital.I.2', ''),
					array('LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.is_capital.I.3', ''),
				),
			)
		),
		'country' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.country',		
			'config' => array (
				'type' => 'select',	
				'foreign_table' => 'static_countries',	
				'foreign_table_where' => 'ORDER BY static_countries.uid',	
				'size' => 1,	
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'countryzone' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.countryzone',		
			'config' => array (
				'type' => 'select',	
				'foreign_table' => 'static_country_zones',	
				'foreign_table_where' => 'ORDER BY static_country_zones.uid',	
				'size' => 1,	
				'minitems' => 0,
				'maxitems' => 1,	
				/*
				'wizards' => array(
					'_PADDING'  => 2,
					'_VERTICAL' => 1,
					'add' => array(
						'type'   => 'script',
						'title'  => 'Create new record',
						'icon'   => 'add.gif',
						'params' => array(
							'table'    => 'static_country_zones',
							'pid'      => '###CURRENT_PID###',
							'setValue' => 'prepend'
						),
						'script' => 'wizard_add.php',
					),
					'list' => array(
						'type'   => 'script',
						'title'  => 'List',
						'icon'   => 'list.gif',
						'params' => array(
							'table' => 'static_country_zones',
							'pid'   => '###CURRENT_PID###',
						),
						'script' => 'wizard_list.php',
					),
					'edit' => array(
						'type'                     => 'popup',
						'title'                    => 'Edit',
						'script'                   => 'wizard_edit.php',
						'popup_onlyOpenIfSelected' => 1,
						'icon'                     => 'edit2.gif',
						'JSopenParams'             => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				),
				*/
			)
		),
		'special_status' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.special_status',		
			'config' => array (
				'type' => 'check',
				'cols' => 5,
				'items' => array (
					array('LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.special_status.I.0', ''),
					array('LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.special_status.I.1', ''),
					array('LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.special_status.I.2', ''),
					array('LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.special_status.I.3', ''),
					array('LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.special_status.I.4', ''),
				),
			)
		),
		'longitude' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.longitude',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',
			)
		),
		'latitude' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.latitude',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',
			)
		),
		'zip_division' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.zip_division',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
				/*
				'wizards' => array(
					'_PADDING' => 2,
					'example' => array(
						'title'         => 'Example Wizard:',
						'type'          => 'script',
						'notNewRecords' => 1,
						'icon'          => t3lib_extMgm::extRelPath('mdb_static_cities').'tx_mdbstaticcities_zip_division/wizard_icon.gif',
						'script'        => t3lib_extMgm::extRelPath('mdb_static_cities').'tx_mdbstaticcities_zip_division/index.php',
					),
				),
				*/
			)
		),
		'zip_range' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.zip_range',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
				/*
				'wizards' => array(
					'_PADDING' => 2,
					'example' => array(
						'title'         => 'Example Wizard:',
						'type'          => 'script',
						'notNewRecords' => 1,
						'icon'          => t3lib_extMgm::extRelPath('mdb_static_cities').'tx_mdbstaticcities_zip_start/wizard_icon.gif',
						'script'        => t3lib_extMgm::extRelPath('mdb_static_cities').'tx_mdbstaticcities_zip_start/index.php',
					),
				),
				*/
			)
		),
		'zip_list' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.zip_list',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
				/*
				'wizards' => array(
					'_PADDING' => 2,
					'example' => array(
						'title'         => 'Example Wizard:',
						'type'          => 'script',
						'notNewRecords' => 1,
						'icon'          => t3lib_extMgm::extRelPath('mdb_static_cities').'tx_mdbstaticcities_zip_division/wizard_icon.gif',
						'script'        => t3lib_extMgm::extRelPath('mdb_static_cities').'tx_mdbstaticcities_zip_division/index.php',
					),
				),
				*/
			)
		),
		'admin_region' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.admin_region',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',
			)
		),
		'kreis_dependency' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.kreis_dependency',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'checkbox' => '',
			)
		),
		'nn' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.nn',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'phonecode' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.phonecode',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',
			)
		),
		'car_plate_code' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.car_plate_code',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'trim',
			)
		),
		'district_key' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.district_key',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'trim',
			)
		),
		'www' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.www',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
				/*
				'wizards' => array(
					'_PADDING' => 2,
					'example' => array(
						'title'         => 'Example Wizard:',
						'type'          => 'script',
						'notNewRecords' => 1,
						'icon'          => t3lib_extMgm::extRelPath('mdb_static_cities').'tx_mdbstaticcities_www/wizard_icon.gif',
						'script'        => t3lib_extMgm::extRelPath('mdb_static_cities').'tx_mdbstaticcities_www/index.php',
					),
				),
				*/
			)
		),
		'area' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.area',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'trim',
			)
		),
		'population' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.population',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',
			)
		),
		'population_date' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.population_date',		
			'config' => array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0'
			)
		),
		'population_density' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.population_density',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',
			)
		),
		'coat_of_arms' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.coat_of_arms',		
			'config' => array (
				'type' => 'group',
				'internal_type' => 'file',
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],	
				'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],	
				'uploadfolder' => 'uploads/tx_mdbstaticcities',
				'show_thumbs' => 1,	
				'size' => 3,	
				'minitems' => 0,
				'maxitems' => 5,
			)
		),
		'coat_of_arms_caption' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.coat_of_arms_caption',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',	
				/*
				'wizards' => array(
					'_PADDING' => 2,
					'example' => array(
						'title'         => 'Example Wizard:',
						'type'          => 'script',
						'notNewRecords' => 1,
						'icon'          => t3lib_extMgm::extRelPath('mdb_static_cities').'tx_mdbstaticcities_coat_of_arms_caption/wizard_icon.gif',
						'script'        => t3lib_extMgm::extRelPath('mdb_static_cities').'tx_mdbstaticcities_coat_of_arms_caption/index.php',
					),
				),
				*/
			)
		),
		'info_source_links' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.info_source_links',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',	
				/*
				'wizards' => array(
					'_PADDING' => 2,
					'example' => array(
						'title'         => 'Example Wizard:',
						'type'          => 'script',
						'notNewRecords' => 1,
						'icon'          => t3lib_extMgm::extRelPath('mdb_static_cities').'tx_mdbstaticcities_info_source_links/wizard_icon.gif',
						'script'        => t3lib_extMgm::extRelPath('mdb_static_cities').'tx_mdbstaticcities_info_source_links/index.php',
					),
				),
				*/
			)
		),
		'info_source_caption' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.info_source_caption',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',	
				/*
				'wizards' => array(
					'_PADDING' => 2,
					'example' => array(
						'title'         => 'Example Wizard:',
						'type'          => 'script',
						'notNewRecords' => 1,
						'icon'          => t3lib_extMgm::extRelPath('mdb_static_cities').'tx_mdbstaticcities_info_source_caption/wizard_icon.gif',
						'script'        => t3lib_extMgm::extRelPath('mdb_static_cities').'tx_mdbstaticcities_info_source_caption/index.php',
					),
				),
				*/
			)
		),
		'nuts' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.nuts',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'trim',
			)
		),
		'locode' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mdb_static_cities/locallang_db.xml:static_cities.locode',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'trim',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, city, name_supplement, supplement_prefix, supplement_postfix, is_capital, country, countryzone, special_status, longitude, latitude, zip_division, zip_range, zip_list, admin_region, kreis_dependency, nn, phonecode, car_plate_code, district_key, www, area, population, population_date, population_density, coat_of_arms, coat_of_arms_caption, info_source_links, info_source_caption, nuts, locode')
	),
	'palettes' => array (
		'1' => array('showitem' => 'starttime, endtime')
	)/**/
);
?>