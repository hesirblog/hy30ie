<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_hits`;");
E_C("CREATE TABLE `v9_hits` (
  `hitsid` char(30) NOT NULL,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `views` int(10) unsigned NOT NULL DEFAULT '0',
  `yesterdayviews` int(10) unsigned NOT NULL DEFAULT '0',
  `dayviews` int(10) unsigned NOT NULL DEFAULT '0',
  `weekviews` int(10) unsigned NOT NULL DEFAULT '0',
  `monthviews` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`hitsid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `v9_hits` values('c-1-1','6','10','0','1','5','5','1358471197');");
E_D("replace into `v9_hits` values('c-1-2','6','6','2','2','5','5','1358471200');");
E_D("replace into `v9_hits` values('c-1-3','6','4','0','1','4','4','1358471192');");
E_D("replace into `v9_hits` values('c-1-4','6','5','1','1','4','4','1358471188');");
E_D("replace into `v9_hits` values('c-1-5','6','0','0','0','0','0','1353724916');");
E_D("replace into `v9_hits` values('c-1-6','6','1','0','1','1','1','1358329311');");
E_D("replace into `v9_hits` values('c-1-7','6','6','0','1','2','2','1358330554');");
E_D("replace into `v9_hits` values('c-1-8','6','3','0','3','3','3','1358324819');");
E_D("replace into `v9_hits` values('c-1-9','6','6','0','2','3','3','1358324734');");
E_D("replace into `v9_hits` values('c-1-10','6','12','1','1','1','11','1359357728');");
E_D("replace into `v9_hits` values('c-1-11','12','7','0','6','7','7','1358501672');");
E_D("replace into `v9_hits` values('c-1-12','12','3','1','1','3','3','1358503308');");
E_D("replace into `v9_hits` values('c-1-13','12','5','1','1','1','5','1358923848');");
E_D("replace into `v9_hits` values('c-1-14','12','7','1','1','4','7','1359278034');");
E_D("replace into `v9_hits` values('c-1-15','12','3','0','2','3','3','1358500426');");
E_D("replace into `v9_hits` values('c-1-16','11','2','0','2','2','2','1358329776');");
E_D("replace into `v9_hits` values('c-1-17','10','4','0','4','4','4','1358330551');");
E_D("replace into `v9_hits` values('c-1-18','10','5','0','5','5','5','1358330574');");
E_D("replace into `v9_hits` values('c-1-19','10','4','0','4','4','4','1358330578');");
E_D("replace into `v9_hits` values('c-1-20','10','0','0','0','0','0','1358151613');");
E_D("replace into `v9_hits` values('c-1-21','10','5','0','1','1','5','1359421199');");
E_D("replace into `v9_hits` values('c-1-22','10','7','0','1','1','7','1359365554');");
E_D("replace into `v9_hits` values('c-1-23','10','10','0','1','10','10','1358501815');");
E_D("replace into `v9_hits` values('c-1-24','10','7','0','1','7','7','1358471208');");
E_D("replace into `v9_hits` values('c-1-25','10','7','6','1','7','7','1358400674');");
E_D("replace into `v9_hits` values('c-1-26','10','24','2','1','1','24','1359421085');");
E_D("replace into `v9_hits` values('c-1-27','13','3','0','3','3','3','1358502630');");
E_D("replace into `v9_hits` values('c-1-28','13','0','0','0','0','0','1358157406');");
E_D("replace into `v9_hits` values('c-1-29','13','3','0','1','1','3','1359421185');");
E_D("replace into `v9_hits` values('c-1-30','13','2','0','2','2','2','1359421191');");
E_D("replace into `v9_hits` values('c-1-31','13','0','0','0','0','0','1358157623');");
E_D("replace into `v9_hits` values('c-1-32','13','0','0','0','0','0','1358157673');");
E_D("replace into `v9_hits` values('c-1-33','20','1','0','1','1','1','1358404374');");
E_D("replace into `v9_hits` values('c-1-34','20','1','0','1','1','1','1358404378');");
E_D("replace into `v9_hits` values('c-1-35','20','2','0','2','2','2','1358404398');");
E_D("replace into `v9_hits` values('c-1-36','20','3','0','3','3','3','1358404400');");
E_D("replace into `v9_hits` values('c-1-37','20','9','1','1','4','9','1359271682');");
E_D("replace into `v9_hits` values('c-1-38','20','4','0','4','4','4','1358404394');");
E_D("replace into `v9_hits` values('c-1-39','20','0','0','0','0','0','1358403318');");
E_D("replace into `v9_hits` values('c-1-40','20','0','0','0','0','0','1358403328');");
E_D("replace into `v9_hits` values('c-1-41','20','0','0','0','0','0','1358403338');");
E_D("replace into `v9_hits` values('c-1-42','20','0','0','0','0','0','1358403347');");
E_D("replace into `v9_hits` values('c-1-43','20','1','0','1','1','1','1358403481');");
E_D("replace into `v9_hits` values('c-1-44','20','0','0','0','0','0','1358403368');");
E_D("replace into `v9_hits` values('c-1-45','20','1','0','1','1','1','1358403736');");
E_D("replace into `v9_hits` values('c-1-46','20','2','1','1','2','2','1358498772');");
E_D("replace into `v9_hits` values('c-1-47','20','2','1','1','2','2','1358502466');");
E_D("replace into `v9_hits` values('c-1-48','20','3','0','3','3','3','1358404633');");
E_D("replace into `v9_hits` values('c-1-49','20','3','0','3','3','3','1358404232');");
E_D("replace into `v9_hits` values('c-1-50','20','1','0','1','1','1','1358404098');");
E_D("replace into `v9_hits` values('c-1-51','20','0','0','0','0','0','1358403456');");
E_D("replace into `v9_hits` values('c-1-52','20','0','0','0','0','0','1358403465');");
E_D("replace into `v9_hits` values('c-1-53','21','4','0','4','4','4','1358503280');");
E_D("replace into `v9_hits` values('c-1-54','21','2','0','2','2','2','1358502200');");
E_D("replace into `v9_hits` values('c-1-55','21','2','0','2','2','2','1358502202');");
E_D("replace into `v9_hits` values('c-1-56','21','3','2','1','3','3','1358502198');");
E_D("replace into `v9_hits` values('c-1-57','21','1','0','1','1','1','1358502196');");
E_D("replace into `v9_hits` values('c-1-58','22','0','0','0','0','0','1358406648');");
E_D("replace into `v9_hits` values('c-1-59','22','1','0','1','1','1','1358502147');");
E_D("replace into `v9_hits` values('c-1-60','22','1','0','1','1','1','1358502146');");
E_D("replace into `v9_hits` values('c-1-61','22','2','0','1','1','2','1359363060');");
E_D("replace into `v9_hits` values('c-1-62','22','3','0','3','3','3','1358502110');");
E_D("replace into `v9_hits` values('c-1-63','23','1','0','1','1','1','1358502669');");
E_D("replace into `v9_hits` values('c-1-64','23','1','0','1','1','1','1358503833');");
E_D("replace into `v9_hits` values('c-1-65','23','0','0','0','0','0','1358406818');");
E_D("replace into `v9_hits` values('c-1-66','23','0','0','0','0','0','1358406839');");
E_D("replace into `v9_hits` values('c-1-67','23','0','0','0','0','0','1358406868');");
E_D("replace into `v9_hits` values('c-1-68','23','0','0','0','0','0','1358406891');");
E_D("replace into `v9_hits` values('c-1-69','24','0','0','0','0','0','1358406929');");
E_D("replace into `v9_hits` values('c-1-70','24','0','0','0','0','0','1358406948');");
E_D("replace into `v9_hits` values('c-1-71','24','0','0','0','0','0','1358406971');");
E_D("replace into `v9_hits` values('c-1-72','24','0','0','0','0','0','1358406990');");
E_D("replace into `v9_hits` values('c-1-73','25','0','0','0','0','0','1358407021');");
E_D("replace into `v9_hits` values('c-1-74','25','0','0','0','0','0','1358407039');");
E_D("replace into `v9_hits` values('c-1-75','25','0','0','0','0','0','1358407062');");
E_D("replace into `v9_hits` values('c-1-76','25','0','0','0','0','0','1358407085');");
E_D("replace into `v9_hits` values('c-1-77','25','0','0','0','0','0','1358407107');");
E_D("replace into `v9_hits` values('c-1-78','26','1','0','1','1','1','1358502164');");
E_D("replace into `v9_hits` values('c-1-79','26','1','0','1','1','1','1358502167');");
E_D("replace into `v9_hits` values('c-1-80','26','1','0','1','1','1','1358502168');");
E_D("replace into `v9_hits` values('c-1-81','26','1','0','1','1','1','1358502175');");
E_D("replace into `v9_hits` values('c-1-82','26','0','0','0','0','0','1358407222');");
E_D("replace into `v9_hits` values('c-1-83','26','0','0','0','0','0','1358407242');");
E_D("replace into `v9_hits` values('c-1-84','27','1','0','1','1','1','1358560913');");
E_D("replace into `v9_hits` values('c-1-85','27','0','0','0','0','0','1358409314');");
E_D("replace into `v9_hits` values('c-1-86','27','0','0','0','0','0','1358409334');");
E_D("replace into `v9_hits` values('c-1-87','27','0','0','0','0','0','1358409353');");
E_D("replace into `v9_hits` values('c-1-88','27','0','0','0','0','0','1358409371');");
E_D("replace into `v9_hits` values('c-1-89','27','1','0','1','1','1','1358560926');");
E_D("replace into `v9_hits` values('c-1-90','28','1','0','1','1','1','1359421198');");
E_D("replace into `v9_hits` values('c-1-91','28','0','0','0','0','0','1358409439');");
E_D("replace into `v9_hits` values('c-1-92','28','0','0','0','0','0','1358409457');");
E_D("replace into `v9_hits` values('c-1-93','28','1','0','1','1','1','1359370044');");
E_D("replace into `v9_hits` values('c-1-94','29','1','0','1','1','1','1358477041');");
E_D("replace into `v9_hits` values('c-1-95','29','0','0','0','0','0','1358409537');");
E_D("replace into `v9_hits` values('c-1-96','29','0','0','0','0','0','1358409563');");
E_D("replace into `v9_hits` values('c-1-97','29','0','0','0','0','0','1358409582');");
E_D("replace into `v9_hits` values('c-1-98','29','0','0','0','0','0','1358409602');");
E_D("replace into `v9_hits` values('c-1-99','29','0','0','0','0','0','1358409640');");

require("../../inc/footer.php");
?>