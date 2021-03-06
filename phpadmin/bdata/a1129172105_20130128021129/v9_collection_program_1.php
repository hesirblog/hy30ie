<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_collection_program`;");
E_C("CREATE TABLE `v9_collection_program` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `siteid` smallint(5) unsigned NOT NULL default '0',
  `nodeid` int(10) unsigned NOT NULL default '0',
  `modelid` mediumint(6) unsigned NOT NULL default '0',
  `catid` int(10) unsigned NOT NULL default '0',
  `config` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `siteid` (`siteid`),
  KEY `nodeid` (`nodeid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>