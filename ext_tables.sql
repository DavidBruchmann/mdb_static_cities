# TYPO3 Extension Manager dump 1.1
#
# Host: 192.168.0.5:49200    Database: nubimus_428
#--------------------------------------------------------


#
# Table structure for table "static_cities"
#
CREATE TABLE static_cities (
  uid int(11) NOT NULL auto_increment,
  pid int(11) default '0',
  tstamp int(11) NOT NULL default '0',
  crdate int(11) NOT NULL default '0',
  cruser_id int(11) NOT NULL default '0',
  deleted tinyint(4) NOT NULL default '0',
  hidden tinyint(4) NOT NULL default '0',
  starttime int(11) NOT NULL default '0',
  endtime int(11) NOT NULL default '0',
  city varchar(255) NOT NULL default '',
  name_supplement varchar(255) NOT NULL default '',
  supplement_prefix varchar(255) NOT NULL default '',
  supplement_postfix varchar(255) NOT NULL default '',
  is_capital int(11) NOT NULL default '0',
  country int(11) NOT NULL default '0',
  countryzone int(11) NOT NULL default '0',
  special_status int(11) NOT NULL default '0',
  longitude tinytext,
  latitude tinytext,
  zip_division text,
  zip_range text,
  zip_list text NOT NULL,
  admin_region tinytext,
  kreis_dependency tinytext,
  nn varchar(50) NOT NULL default '0',
  phonecode tinytext,
  car_plate_code varchar(255) NOT NULL default '',
  district_key varchar(255) NOT NULL default '',
  www text,
  area varchar(255) NOT NULL default '',
  population int(11) default '',
  population_date int(11) NOT NULL default '0',
  population_density tinytext,
  coat_of_arms text,
  coat_of_arms_caption text,
  info_source_links text,
  info_source_caption text,
  nuts varchar(255) NOT NULL default '',
  locode varchar(255) NOT NULL default '',
  wiki_link varchar(255) NOT NULL default '',
  PRIMARY KEY (uid),
  KEY parent (pid)
);