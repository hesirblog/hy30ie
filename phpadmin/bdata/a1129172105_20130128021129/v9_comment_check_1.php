<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_comment_check`;");
E_C("CREATE TABLE `v9_comment_check` (
  `id` int(10) NOT NULL auto_increment,
  `comment_data_id` int(10) default '0' COMMENT '论评ID号',
  `siteid` smallint(5) NOT NULL default '0' COMMENT '站点ID',
  `tableid` mediumint(8) default '0' COMMENT '数据存储表ID',
  PRIMARY KEY  (`id`),
  KEY `siteid` (`siteid`),
  KEY `comment_data_id` (`comment_data_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>