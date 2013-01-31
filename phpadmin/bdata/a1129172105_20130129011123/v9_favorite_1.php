<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_favorite`;");
E_C("CREATE TABLE `v9_favorite` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `userid` mediumint(8) unsigned NOT NULL default '0',
  `title` char(100) NOT NULL,
  `url` char(100) NOT NULL,
  `adddate` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `v9_favorite` values('1','1','李克强要求推进西部开发开放','http://localhost.phpcms.com/index.php?m=content&c=index&a=show&catid=6&id=9','1353726526');");
E_D("replace into `v9_favorite` values('2','1','李克强：开放包容是亚洲健康与可持续发展客观要求','http://localhost.phpcms.com/index.php?m=content&c=index&a=show&catid=6&id=10','1353726536');");
E_D("replace into `v9_favorite` values('3','1','山西晋中火锅店爆炸燃烧事故致14人死亡47人受伤','http://localhost.phpcms.com/index.php?m=content&c=index&a=show&catid=6&id=4','1353726545');");

require("../../inc/footer.php");
?>