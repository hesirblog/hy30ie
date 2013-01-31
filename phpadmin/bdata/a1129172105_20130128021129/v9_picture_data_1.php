<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_picture_data`;");
E_C("CREATE TABLE `v9_picture_data` (
  `id` mediumint(8) unsigned default '0',
  `content` text NOT NULL,
  `readpoint` smallint(5) unsigned NOT NULL default '0',
  `groupids_view` varchar(100) NOT NULL,
  `paginationtype` tinyint(1) NOT NULL,
  `maxcharperpage` mediumint(6) NOT NULL,
  `template` varchar(30) NOT NULL,
  `paytype` tinyint(1) unsigned NOT NULL default '0',
  `relation` varchar(255) NOT NULL default '',
  `pictureurls` mediumtext NOT NULL,
  `copyfrom` varchar(255) NOT NULL default '',
  `allow_comment` tinyint(1) unsigned NOT NULL default '1',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>