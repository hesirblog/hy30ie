<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_message_group`;");
E_C("CREATE TABLE `v9_message_group` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `typeid` smallint(5) unsigned NOT NULL default '0',
  `groupid` tinyint(4) unsigned NOT NULL default '0' COMMENT '用户组id',
  `subject` char(80) default NULL,
  `content` text NOT NULL COMMENT '内容',
  `inputtime` int(10) unsigned default '0',
  `status` tinyint(2) unsigned default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>