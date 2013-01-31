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
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `pluginid` smallint(6) unsigned NOT NULL default '0',
  `title` varchar(100) NOT NULL default '',
  `description` varchar(255) NOT NULL default '',
  `fieldname` varchar(40) NOT NULL default '',
  `fieldtype` varchar(20) NOT NULL default 'text',
  `value` text NOT NULL,
  `setting` text NOT NULL,
  `formattribute` varchar(255) default NULL,
  `listorder` tinyint(3) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `pluginid` (`pluginid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>