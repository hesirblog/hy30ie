<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_wap`;");
E_C("CREATE TABLE `v9_wap` (
  `siteid` smallint(5) unsigned NOT NULL default '1',
  `sitename` char(30) NOT NULL,
  `logo` char(100) default NULL,
  `domain` varchar(100) default NULL,
  `setting` mediumtext,
  `status` tinyint(2) default NULL,
  PRIMARY KEY  (`siteid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `v9_wap` values('1','PHPCMS手机门户','/statics/images/wap/wlogo.gif','','array (\n  ''listnum'' => ''10'',\n  ''thumb_w'' => ''220'',\n  ''thumb_h'' => ''0'',\n  ''c_num'' => ''1000'',\n  ''index_template'' => ''index'',\n  ''category_template'' => ''category'',\n  ''list_template'' => ''list'',\n  ''show_template'' => ''show'',\n)','0');");

require("../../inc/footer.php");
?>