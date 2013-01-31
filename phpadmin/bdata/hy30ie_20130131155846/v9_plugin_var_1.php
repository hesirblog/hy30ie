<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_plugin_var`;");
E_C("CREATE TABLE `v9_plugin_var` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `pluginid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `fieldname` varchar(40) NOT NULL DEFAULT '',
  `fieldtype` varchar(20) NOT NULL DEFAULT 'text',
  `value` text NOT NULL,
  `setting` text NOT NULL,
  `formattribute` varchar(255) DEFAULT NULL,
  `listorder` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `pluginid` (`pluginid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>