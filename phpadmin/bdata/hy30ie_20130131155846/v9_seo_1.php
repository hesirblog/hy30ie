<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_seo`;");
E_C("CREATE TABLE `v9_seo` (
  `sid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` mediumint(8) DEFAULT NULL,
  `roleuser` mediumint(8) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `typetop` char(100) DEFAULT NULL,
  `typeson` char(100) DEFAULT NULL,
  `ftp_ip` char(50) DEFAULT NULL,
  `ftp_port` char(10) DEFAULT '21',
  `ftp_user` char(50) DEFAULT NULL,
  `ftp_pwd` char(50) DEFAULT NULL,
  `searchtype` char(50) DEFAULT NULL,
  `remark` mediumtext,
  `status` tinyint(4) DEFAULT NULL,
  `adddate` int(10) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=utf8");
E_D("replace into `v9_seo` values('1','1','4','重庆圣矢网络','http://www.30ie.com','','','192.168.1.108','21','test','123456','1,2,3','重庆圣矢网络','2','1352697257');");
E_D("replace into `v9_seo` values('17','26','4','重庆盈水源','http://www.yingyuan-scl.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357537331');");
E_D("replace into `v9_seo` values('12','1','4','重庆杉木静电设备','http://www.yj-esd.com','','','192.168.1.108','21','yj-esd','123456','1,2,3','重庆杉木静电设备','2','1354085417');");
E_D("replace into `v9_seo` values('16','49','4','重庆红丰消防','http://www.cqhfxf.com','3367','3426','1','1','1','1','1','','2','1357536927');");
E_D("replace into `v9_seo` values('18','50','4','重庆奇果','http://www.kigobrand.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357537610');");
E_D("replace into `v9_seo` values('19','39','4','重庆鼎创消防','http://www.cqdingchuang.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357537767');");
E_D("replace into `v9_seo` values('20','40','4','重庆新威商务','http://www.cqxwxfdb.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357537954');");
E_D("replace into `v9_seo` values('21','41','4','1024婚纱摄影','http://www.1024sy.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357538046');");
E_D("replace into `v9_seo` values('22','51','4','重庆益记财务','http://www.cqyjcw999.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357538126');");
E_D("replace into `v9_seo` values('23','52','4','重庆鑫达景观石材','http://www.cqxdjgs.com','3367','3426','127.0.0.1','21','guest','guest','1,2,3','','2','1357538212');");
E_D("replace into `v9_seo` values('24','22','4','华发装修','http://www.hua888.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357538491');");
E_D("replace into `v9_seo` values('25','53','4','声光影色影视动画','http://www.vlsc3d.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357539043');");
E_D("replace into `v9_seo` values('26','34','4','重庆盈源水','http://www.yingyuanscl.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357607619');");
E_D("replace into `v9_seo` values('27','54','4','南通腾飞重型机床','http://www.xjnantong.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357607800');");
E_D("replace into `v9_seo` values('28','55','4','江苏海锻液压','http://www.cqhaiduan.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357607995');");
E_D("replace into `v9_seo` values('29','56','4','南通腾飞重型机床02','http://www.dgjiacai88.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357608079');");
E_D("replace into `v9_seo` values('30','89','4','重庆红丰公司','http://www.cqgfxf.com.cn','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357608374');");
E_D("replace into `v9_seo` values('31','58','4','南通腾飞重型机床03','http://www.51wanzhuan.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357608456');");
E_D("replace into `v9_seo` values('32','23','4','重庆曼赫商贸','http://www.hehekj.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357608545');");
E_D("replace into `v9_seo` values('33','24','4','重庆瑞日德商贸','http://www.rrdkj.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357608603');");
E_D("replace into `v9_seo` values('34','59','4','重庆科龙专业维修','http://www.cqkelong.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357608726');");
E_D("replace into `v9_seo` values('35','60','4','重庆电工机械','http://www.cqhuanghong.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357608852');");
E_D("replace into `v9_seo` values('36','21','4','劲精电器','http://www.cqjjdq.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357608963');");
E_D("replace into `v9_seo` values('37','33','4','仙女山旅馆','http://www.apl-jd.com','3365','3408','127.0.0.1','21','guest','guest','1','','2','1357609094');");
E_D("replace into `v9_seo` values('38','61','4','重庆创能文化02','http://www.haojintrade.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357609163');");
E_D("replace into `v9_seo` values('39','62','4','重庆创能文化03','http://www.qizhou2012.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357609234');");
E_D("replace into `v9_seo` values('40','63','4','重庆红丰消防02','http://www.cqhfxf.cn','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357609375');");
E_D("replace into `v9_seo` values('41','44','4','重庆利达制冷','http://www.lidadkaz.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357610103');");
E_D("replace into `v9_seo` values('42','45','4','重庆帝隆工业皮带','http://www.cqtirone.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357610195');");
E_D("replace into `v9_seo` values('43','64','4','重庆恩特律师事务所','http://www.hunterlawyer.cn','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357610272');");
E_D("replace into `v9_seo` values('44','65','4','重庆耘森装饰','http://www.cqyunsen.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357610548');");
E_D("replace into `v9_seo` values('45','46','4','中原矿山设备','http://www.cqzysb.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357610625');");
E_D("replace into `v9_seo` values('46','66','4','车派商城','http://www.che1234.com','3365','3419','127.0.0.1','21','guest','guest','1','','2','1357610695');");
E_D("replace into `v9_seo` values('47','32','5','重庆利达电器','http://www.lidawx.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357611605');");
E_D("replace into `v9_seo` values('48','67','5','重庆格力空调维修','http://www.cqgelikt.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357611739');");
E_D("replace into `v9_seo` values('49','68','5','重庆汇源医药02','http://www.cqwugong.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357612028');");
E_D("replace into `v9_seo` values('50','69','5','三峡联合职业大学','http://www.sxldz.com','3363','3399','127.0.0.1','21','guest','guest','1','','2','1357612119');");
E_D("replace into `v9_seo` values('51','37','5','重庆老土锅','http://www.laotuguo.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357612345');");
E_D("replace into `v9_seo` values('52','70','5','重庆电线电缆','http://www.023ts.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357612562');");
E_D("replace into `v9_seo` values('53','71','5','四川煌盛管业','http://www.cqshgs.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357612686');");
E_D("replace into `v9_seo` values('54','72','5','重庆奥克斯空调维修','http://www.cqaokesi.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357612781');");
E_D("replace into `v9_seo` values('55','73','5','重庆创能文化04','http://www.cq4dm.com','','','127.0.0.1','21','guest','guest','1','','2','1357612895');");
E_D("replace into `v9_seo` values('56','74','5','重庆泰山电线电缆','http://www.cqtsdl.net','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357612991');");
E_D("replace into `v9_seo` values('57','75','5','重庆朗星手机信号放大','http://www.dgly888.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357613147');");
E_D("replace into `v9_seo` values('58','36','5','跑江湖新产品','http://www.pjhdtw.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357613205');");
E_D("replace into `v9_seo` values('59','76','5','重庆然浩科技','http://www.cqranhao.net','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357613263');");
E_D("replace into `v9_seo` values('60','77','5','重庆切尔思家政','http://www.cqjzw.cn','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357613360');");
E_D("replace into `v9_seo` values('61','25','5','重庆体能机电','http://www.cqtnjd.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357613481');");
E_D("replace into `v9_seo` values('62','83','5','重庆方园桥隧物资','http://www.cqfywz.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357613552');");
E_D("replace into `v9_seo` values('63','84','5','重庆石山塑料袋','http://www.cqsssl.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357614049');");
E_D("replace into `v9_seo` values('64','86','5','重庆LG空调维修中心','http://www.cqlgwx.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357614116');");
E_D("replace into `v9_seo` values('65','87','5','重庆电动道闸','http://www.cqxydoor.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357614207');");
E_D("replace into `v9_seo` values('66','88','5','重庆天宇门窗01','http://www.cqtianyu.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357614308');");
E_D("replace into `v9_seo` values('67','90','5','大兴搬家','http://www.bbdaxing.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357614394');");
E_D("replace into `v9_seo` values('68','91','5','重庆卫星电视','http://www.jkd99.cn','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357614436');");
E_D("replace into `v9_seo` values('69','93','5','规范申报消防公司','http://www.cqgxf.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357614531');");
E_D("replace into `v9_seo` values('70','94','5','红丰消防设备公司','http://www.cqhongfeng.com.cn','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357614643');");
E_D("replace into `v9_seo` values('71','96','5','红丰消防维保公司','http://www.hongfengwb.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357614767');");
E_D("replace into `v9_seo` values('72','97','5','重庆自力起重吊装','http://www.cqdiaozhuang.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357614827');");
E_D("replace into `v9_seo` values('73','31','5','重庆渝帆消防','http://www.cqyufan.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357614887');");
E_D("replace into `v9_seo` values('74','99','5','圣矢网络','http://www.30ie.org','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357614976');");
E_D("replace into `v9_seo` values('75','100','5','重庆唯恋婚嫁','http://www.cqwl88629590.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357615031');");
E_D("replace into `v9_seo` values('76','47','5','凯迪起重机械','http://www.cqkdqz.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357615095');");
E_D("replace into `v9_seo` values('77','30','5','重庆童鹰','http://www.cqtongying.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357615156');");
E_D("replace into `v9_seo` values('78','101','6','重庆东明灯饰','http://www.cqdmlg.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357615255');");
E_D("replace into `v9_seo` values('79','29','6','重庆冬韵暖通','http://www.cqdy88.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357615339');");
E_D("replace into `v9_seo` values('80','102','6','深圳卫星电视','http://www.shenzhengtv.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357615394');");
E_D("replace into `v9_seo` values('81','103','6','星星科技公司','http://www.sztvshow518.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357615442');");
E_D("replace into `v9_seo` values('82','105','6','赛富通','http://www.cqchinagoogle.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357615514');");
E_D("replace into `v9_seo` values('83','104','6','红丰消防机电公司','http://www.hongfenglg.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357615793');");
E_D("replace into `v9_seo` values('84','106','6','红丰消防施工公司','http://www.hongfengsx.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357615876');");
E_D("replace into `v9_seo` values('85','107','6','红丰消防申报','http://www.hongfengsb.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357615939');");
E_D("replace into `v9_seo` values('86','108','6','重庆创能文化01','http://www.haojin2012.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357616013');");
E_D("replace into `v9_seo` values('87','109','6','重庆卫星电视安装','http://www.520bei.cn','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357616066');");
E_D("replace into `v9_seo` values('88','110','6','维才企业管理','http://www.cqweicai.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357616139');");
E_D("replace into `v9_seo` values('89','111','6','纵鹏文化传媒','http://www.modelliyi.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357616205');");
E_D("replace into `v9_seo` values('90','112','6','重庆渝涪机床','http://www.cqyfsb.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357616254');");
E_D("replace into `v9_seo` values('91','113','6','重庆奥健体育','http://www.aojian2008.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357616302');");
E_D("replace into `v9_seo` values('92','114','6','重庆永聚物资01','http://www.cqtongdai.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357616379');");
E_D("replace into `v9_seo` values('93','115','6','中国演讲口才网','http://www.yjkc365.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357616442');");
E_D("replace into `v9_seo` values('94','35','6','天润展览','http://www.cq-trun.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357616570');");
E_D("replace into `v9_seo` values('95','27','6','重庆华威保温','http://www.cqhwbw.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357616747');");
E_D("replace into `v9_seo` values('96','43','6','重庆腾龙达消防','http://www.cq-tld.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357616819');");
E_D("replace into `v9_seo` values('97','116','6','重庆祥和涂料01','http://www.xianghetl.com','3367','3429','127.0.0.1','21','guest','guest','1','','2','1357616899');");
E_D("replace into `v9_seo` values('98','117','6','宇华保温材料','http://www.cqyhbw.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357617644');");
E_D("replace into `v9_seo` values('99','118','6','重庆汇卓实业01','http://www.cqhuizhuo168.com','3367','3429','127.0.0.1','21','guest','guest','1','','2','1357617700');");
E_D("replace into `v9_seo` values('100','119','6','海尔电器维修','http://www.cqhaierwx.com','3365','3414','127.0.0.1','21','guest','guest','1','','2','1357617783');");
E_D("replace into `v9_seo` values('101','38','6','重庆运程消防','http://www.cqyuncheng.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357621583');");
E_D("replace into `v9_seo` values('102','120','6','重庆展门科技','http://www.zhanmendoor.com','3367','3426','127.0.0.1','21','guest','guest','1','','2','1357621650');");
E_D("replace into `v9_seo` values('103','121','6','君悦礼品01','http://www.li69.com','3365','3411','127.0.0.1','21','guest','guest','1','','2','1357621751');");
E_D("replace into `v9_seo` values('104','122','6','重庆唯恋婚嫁01','http://www.cqwlhq.com','3365','3416','127.0.0.1','21','guest','guest','1','','2','1357621846');");
E_D("replace into `v9_seo` values('105','123','6','南岳工程机械','http://www.wjwx88.com','3367','3427','127.0.0.1','21','guest','guest','1','','2','1357621903');");
E_D("replace into `v9_seo` values('106','124','6','中国车品网','http://www.51cp.cc','3365','3419','127.0.0.1','21','guest','guest','1','','2','1357621963');");
E_D("replace into `v9_seo` values('107','48','6','重科集团','http://www.cqzkfb.com','3367','3427','127.0.0.1','21','guest','guest','1','','2','1357622049');");
E_D("replace into `v9_seo` values('108','28','6','成都体能机电','http://www.cdtnjd.com','3367','3427','127.0.0.1','21','guest','guest','1','','2','1357622107');");

require("../../inc/footer.php");
?>