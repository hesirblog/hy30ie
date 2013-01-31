<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_message`;");
E_C("CREATE TABLE `v9_message` (
  `messageid` int(10) unsigned NOT NULL auto_increment,
  `send_from_id` char(30) NOT NULL default '0',
  `send_to_id` char(30) NOT NULL default '0',
  `folder` enum('all','inbox','outbox') NOT NULL,
  `status` tinyint(1) unsigned NOT NULL default '0',
  `message_time` int(10) unsigned NOT NULL default '0',
  `subject` char(80) default NULL,
  `content` text NOT NULL,
  `replyid` int(10) unsigned NOT NULL default '0',
  `del_type` tinyint(1) unsigned default '0',
  PRIMARY KEY  (`messageid`),
  KEY `msgtoid` (`send_to_id`,`folder`),
  KEY `replyid` (`replyid`),
  KEY `folder` (`send_from_id`,`folder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>