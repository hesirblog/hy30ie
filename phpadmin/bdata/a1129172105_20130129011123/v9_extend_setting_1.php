<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_extend_setting`;");
E_C("CREATE TABLE `v9_extend_setting` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `key` char(30) NOT NULL,
  `data` mediumtext,
  PRIMARY KEY  (`id`),
  KEY `key` (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>