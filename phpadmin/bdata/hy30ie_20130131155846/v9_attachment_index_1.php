<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_attachment_index`;");
E_C("CREATE TABLE `v9_attachment_index` (
  `keyid` char(30) NOT NULL,
  `aid` char(10) NOT NULL,
  KEY `keyid` (`keyid`),
  KEY `aid` (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `v9_attachment_index` values('c-6-2','1');");
E_D("replace into `v9_attachment_index` values('c-6-4','2');");
E_D("replace into `v9_attachment_index` values('c-6-5','3');");
E_D("replace into `v9_attachment_index` values('c-6-6','4');");
E_D("replace into `v9_attachment_index` values('c-6-7','5');");
E_D("replace into `v9_attachment_index` values('c-12-11','7');");
E_D("replace into `v9_attachment_index` values('c-12-11','8');");
E_D("replace into `v9_attachment_index` values('c-12-12','9');");
E_D("replace into `v9_attachment_index` values('c-12-12','10');");
E_D("replace into `v9_attachment_index` values('c-12-13','11');");
E_D("replace into `v9_attachment_index` values('c-12-13','12');");
E_D("replace into `v9_attachment_index` values('c-12-14','13');");
E_D("replace into `v9_attachment_index` values('c-12-14','14');");
E_D("replace into `v9_attachment_index` values('c-12-15','15');");
E_D("replace into `v9_attachment_index` values('c-12-15','16');");
E_D("replace into `v9_attachment_index` values('c-13-27','17');");
E_D("replace into `v9_attachment_index` values('c-13-27','18');");
E_D("replace into `v9_attachment_index` values('c-13-27','19');");
E_D("replace into `v9_attachment_index` values('c-13-27','20');");
E_D("replace into `v9_attachment_index` values('c-13-27','21');");
E_D("replace into `v9_attachment_index` values('c-13-28','22');");
E_D("replace into `v9_attachment_index` values('c-13-28','23');");
E_D("replace into `v9_attachment_index` values('c-13-28','24');");
E_D("replace into `v9_attachment_index` values('c-13-28','25');");
E_D("replace into `v9_attachment_index` values('c-13-28','26');");
E_D("replace into `v9_attachment_index` values('c-13-28','27');");
E_D("replace into `v9_attachment_index` values('c-13-28','28');");
E_D("replace into `v9_attachment_index` values('c-13-28','29');");
E_D("replace into `v9_attachment_index` values('c-13-28','30');");
E_D("replace into `v9_attachment_index` values('c-13-28','31');");
E_D("replace into `v9_attachment_index` values('c-13-29','32');");
E_D("replace into `v9_attachment_index` values('c-13-29','33');");
E_D("replace into `v9_attachment_index` values('c-13-29','34');");
E_D("replace into `v9_attachment_index` values('c-13-29','35');");
E_D("replace into `v9_attachment_index` values('c-13-30','36');");
E_D("replace into `v9_attachment_index` values('c-13-30','37');");
E_D("replace into `v9_attachment_index` values('c-13-30','38');");
E_D("replace into `v9_attachment_index` values('c-13-30','39');");
E_D("replace into `v9_attachment_index` values('c-13-30','40');");
E_D("replace into `v9_attachment_index` values('c-13-30','41');");
E_D("replace into `v9_attachment_index` values('c-13-30','42');");
E_D("replace into `v9_attachment_index` values('c-13-30','43');");
E_D("replace into `v9_attachment_index` values('c-13-30','44');");
E_D("replace into `v9_attachment_index` values('c-13-30','45');");
E_D("replace into `v9_attachment_index` values('c-13-31','46');");
E_D("replace into `v9_attachment_index` values('c-13-31','47');");
E_D("replace into `v9_attachment_index` values('c-13-31','48');");
E_D("replace into `v9_attachment_index` values('c-13-31','49');");
E_D("replace into `v9_attachment_index` values('c-13-31','50');");
E_D("replace into `v9_attachment_index` values('c-13-31','51');");
E_D("replace into `v9_attachment_index` values('c-13-31','52');");
E_D("replace into `v9_attachment_index` values('c-13-32','53');");
E_D("replace into `v9_attachment_index` values('c-13-32','54');");
E_D("replace into `v9_attachment_index` values('c-13-32','55');");
E_D("replace into `v9_attachment_index` values('c-13-32','56');");
E_D("replace into `v9_attachment_index` values('c-13-32','57');");
E_D("replace into `v9_attachment_index` values('c-11-100','58');");
E_D("replace into `v9_attachment_index` values('c-11-100','59');");
E_D("replace into `v9_attachment_index` values('c-11-100','60');");
E_D("replace into `v9_attachment_index` values('c-11-100','61');");
E_D("replace into `v9_attachment_index` values('c-11-101','62');");
E_D("replace into `v9_attachment_index` values('c-11-101','63');");
E_D("replace into `v9_attachment_index` values('c-11-101','64');");
E_D("replace into `v9_attachment_index` values('c-11-101','65');");
E_D("replace into `v9_attachment_index` values('c-11-102','66');");
E_D("replace into `v9_attachment_index` values('c-11-103','67');");
E_D("replace into `v9_attachment_index` values('c-11-103','68');");
E_D("replace into `v9_attachment_index` values('c-11-133','69');");
E_D("replace into `v9_attachment_index` values('c-11-133','70');");
E_D("replace into `v9_attachment_index` values('c-11-133','71');");
E_D("replace into `v9_attachment_index` values('c-11-135','72');");
E_D("replace into `v9_attachment_index` values('c-11-334','73');");
E_D("replace into `v9_attachment_index` values('c-11-561','74');");
E_D("replace into `v9_attachment_index` values('c-11-624','75');");
E_D("replace into `v9_attachment_index` values('c-11-624','76');");
E_D("replace into `v9_attachment_index` values('c-11-632','77');");
E_D("replace into `v9_attachment_index` values('c-11-632','78');");
E_D("replace into `v9_attachment_index` values('c-11-632','79');");
E_D("replace into `v9_attachment_index` values('c-11-1013','80');");
E_D("replace into `v9_attachment_index` values('c-11-1017','81');");

require("../../inc/footer.php");
?>