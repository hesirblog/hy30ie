<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_site`;");
E_C("CREATE TABLE `v9_site` (
  `siteid` smallint(5) unsigned NOT NULL auto_increment,
  `name` char(30) default '',
  `dirname` char(255) default '',
  `domain` char(255) default '',
  `site_title` char(255) default '',
  `keywords` char(255) default '',
  `description` char(255) default '',
  `release_point` text,
  `default_style` char(50) default NULL,
  `template` text,
  `setting` mediumtext,
  `uuid` char(40) default '',
  PRIMARY KEY  (`siteid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `v9_site` values('1','重庆圣矢网络科技SEO管理系统','','http://hy.30ie.com/','重庆圣矢网络科技SEO管理系统','重庆圣矢网络科技SEO管理系统','重庆圣矢网络科技SEO管理系统','','hy30ie','hy30ie','array (\n  ''upload_maxsize'' => ''2048'',\n  ''upload_allowext'' => ''jpg|jpeg|gif|bmp|png|doc|docx|xls|xlsx|ppt|pptx|pdf|txt|rar|zip|swf'',\n  ''watermark_enable'' => ''0'',\n  ''watermark_minwidth'' => ''300'',\n  ''watermark_minheight'' => ''300'',\n  ''watermark_img'' => ''statics/images/water//mark.png'',\n  ''watermark_pct'' => ''85'',\n  ''watermark_quality'' => ''80'',\n  ''watermark_pos'' => ''9'',\n)','dbf2d867-2ad8-11e2-9ed1-001f81000250');");

require("../../inc/footer.php");
?>