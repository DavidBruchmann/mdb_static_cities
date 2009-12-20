<?php

########################################################################
# Extension Manager/Repository config file for ext: "mdb_static_cities"
#
# Auto generated 20-12-2009 21:12
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'MDB Static Cities DE',
	'description' => 'EN: Static City Data of Germany.
DE: Statische Stätedaten von Deutschland.
FR: D\'information statique des villes germanique.',
	'category' => 'misc',
	'author' => 'David Bruchmann',
	'author_email' => 'mdb_static_cities@bruchmann-web.de',
	'shy' => '',
	'dependencies' => 'static_info_tables',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.0',
	'constraints' => array(
		'depends' => array(
			'static_info_tables' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:11:{s:9:"ChangeLog";s:4:"a47b";s:10:"README.txt";s:4:"d0dd";s:9:"Thumbs.db";s:4:"656a";s:12:"ext_icon.gif";s:4:"cfb8";s:17:"ext_localconf.php";s:4:"3dcb";s:14:"ext_tables.php";s:4:"3c07";s:14:"ext_tables.sql";s:4:"03b7";s:25:"ext_tables_static+adt.sql";s:4:"0046";s:34:"icon_tx_mdbstaticcities_cities.png";s:4:"b92a";s:16:"locallang_db.xml";s:4:"f2bd";s:7:"tca.php";s:4:"d799";}',
	'suggests' => array(
	),
);

?>