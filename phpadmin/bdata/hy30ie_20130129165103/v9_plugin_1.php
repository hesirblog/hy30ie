<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_plugin`;");
E_C("CREATE TABLE `v9_plugin` (
  `pluginid` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `appid` int(10) DEFAULT NULL,
  `name` varchar(40) NOT NULL DEFAULT '',
  `identification` varchar(40) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `datatables` varchar(255) NOT NULL DEFAULT '',
  `dir` varchar(100) NOT NULL DEFAULT '',
  `copyright` varchar(100) NOT NULL DEFAULT '',
  `setting` text NOT NULL,
  `iframe` text NOT NULL,
  `version` varchar(20) NOT NULL DEFAULT '',
  `listorder` tinyint(3) NOT NULL DEFAULT '0',
  `disable` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pluginid`),
  UNIQUE KEY `identification` (`identification`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>