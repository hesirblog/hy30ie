<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
	<meta name="description" content="<?php echo $SEO['description'];?>">
    <meta http-equiv="x-ua-compatible" content="ie=7" />
    <link href="<?php echo TEMPLETS_SKIN;?>/css/global.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo TEMPLETS_SKIN;?>/css/side.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo TEMPLETS_SKIN;?>/css/transferred.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo TEMPLETS_SKIN;?>/js/jquery-1.8.3.min.js" language="javascript" type="text/javascript"></script>
    <script src="<?php echo TEMPLETS_SKIN;?>/js/jquery-cookie.js" language="javascript" type="text/javascript"></script>
</head>
<?php include template("content","header"); ?>
				<div id="nav_inf">
				  当前位置：
				  <a class="nb" href="/">
					首页
				  </a>
				  &gt; SEO优化转入
				</div>
				<?php include template("content","seo_left"); ?>
				<div class="r_content">
				  <div id="T_ad">
				  </div>
				  <div class="transfer">
					<ul class="T_search">
					  <li class="T_font1">
						搜索引擎优化转入
					  </li>
					  <li class="ym">
						<span class="T_font2">
						  域名：
						</span>
						<span class="T_font3">
						  *
						</span>
						www.
						<input id="T_ym" class="tp" type="text">
						<select id="ym_select">
						  <option value=".com">
							.com
						  </option>
						  <option value=".com.cn">
							.com.cn
						  </option>
						  <option value=".cn">
							.cn
						  </option>
						  <option value=".net">
							.net
						  </option>
						  <option value=".mobi">
							.mobi
						  </option>
						  <option value=".co">
							.co
						  </option>
						  <option value=".net.cn">
							.net.cn
						  </option>
						  <option value=".so">
							.so
						  </option>
						  <option value=".org">
							.org
						  </option>
						  <option value=".gov.cn">
							.gov.cn
						  </option>
						  <option value=".org.cn">
							.org.cn
						  </option>
						  <option value=".tel">
							.tel
						  </option>
						  <option value=".tv">
							.tv
						  </option>
						  <option value=".biz">
							.biz
						  </option>
						  <option value=".cc">
							.cc
						  </option>
						</select>
					  </li>
					  <li>
						<span class="T_font2 fp">
						  关键词：
						</span>
						<span class="T_font3 fp">
						  *
						</span>
						<textarea id="T_keyword" class="tp" onfocus="this.value=''; this.onfocus=null;">如：双昌</textarea>					  
					  </li>
					  <li class="T_font4">
						注意：回车换行可同时录入多个关键词。
						<img src="<?php echo TEMPLETS_SKIN;?>/images/f6.gif">
					  </li>
					  <li class="T_font5">
						<input id="T_ck" checked="checked" disabled="disabled" type="checkbox">
						已阅读双昌服务条款,并同意
					  </li>
					  <li>
						<a href="#" id="Transfer_btn">
						</a>
					  </li>
					</ul>
					<ul class="T_infor">
					  <li style=" line-height:18px;">
						<img src="<?php echo TEMPLETS_SKIN;?>/images/20121011001.gif">
						搜索引擎优化转入（SEO Transfer）又称优化转移服务商，即将某优化从当前的优化服务商A转出，转入到优化服务商B进行管理维护；
					  </li>
					  <li class="Attention">
						注意事项
					  </li>
					  <li class="A_detail">
						SEO关键词排名未在搜索引擎
						<span>
						  前20位
						</span>
						；
					  </li>
					  <li class="A_detail">
						转移优化站点 无
						<span>
						  FTP管理权限
						</span>
						；
					  </li>
					  <li class="A_detail">
						原优化站点使用
						<span>
						  黑帽优化
						</span>
						技术手段;
					  </li>
					  <li style=" margin-top:36px;">
						<a href="#"
						target="_blank">
						  <img src="<?php echo TEMPLETS_SKIN;?>/images/20121011003.gif" border="0">
						</a>
						<img src="<?php echo TEMPLETS_SKIN;?>/images/20121011004.gif">
					  </li>
					</ul>
				  </div>
				  <script language="javascript" type="text/javascript">
					var Transfer_btn = $("#Transfer_btn");
					Transfer_btn.click(function() {
					  var keyword = $("#T_keyword").val();
					  var T_ym = $("#T_ym").val();
					  if ($.trim(T_ym) == "" || $.trim(keyword) == "") {
						alert("信息不能空");
						return false;
					  }
					  var domain = T_ym + $("#ym_select").val();
					  var tsk = keyword.split("\n");
					  for (var i = 0; i < tsk.length; i++) {
						if ($.trim(tsk[i]) != "") {
						  AddCar("01", "搜索引擎优化转入", escape($.trim(tsk[i])), domain, "/")
						}
					  }

					});
				  </script>
				  <div class="search5">
					<ul>
					  <li class="T_xq">
						搜索引擎优化转入详情
					  </li>
					</ul>
					<ul id="problem">
					  <li>
						1.搜索引擎优化转入（SEO Transfer）又称优化转移服务商，即将某优化从当前的优化服务商A转出，转入到优化服务商B进行管理维护；
					  </li>
					  <li>
						2.双昌作为搜索引擎优化服务的领先品牌，已为300家客户管理着超过1000优化网站50000个关键词，双昌凭借优质的服务和过硬的技术赢得了客户的信任，每天都有很多信赖双昌品牌的客户将搜索引擎优化转入双昌管理。
					  </li>
					  <li>
						3.如果原服务商擅自限制或拒绝优化转出，网站持有者可以联系双昌： 邮箱为admin@sev.cn，电话为400-023-6181；
					  </li>
					  <li>
						4.但根据SEO搜索引擎优化转入规定，以下情况的优化无法转移服务商：
						<br>
						<span>
						  关键词没有经过优化或排名未在百度前20位；
						  <br>
						</span>
						<span>
						  优化刚上线7个工作日；
						  <br>
						</span>
						<span>
						  网站不能正常打开或访问速度不稳定；
						  <br>
						</span>
						<span>
						  无域名、FTP管理权限；
						  <br>
						</span>
						<span>
						  有赌博、色情、电影、娱乐、违法性质网站；
						  <br>
						</span>
					  </li>
					  <li class="ST_t">
						转入流程：
					  </li>
					  <li id="ST_con">
						<span class="ST_bg">
						  提交关键词及网址
						</span>
						<span class="ST_bg ST_bg2">
						  确认购买关键词信息
						</span>
						<span class="ST_bg ST_bg3">
						  支付结算
						</span>
						<span class="ST_bg ST_bg4">
						  提供网站FTP信息
						</span>
						<span class="ST_bg ST_bg5">
						  完成
						</span>
					  </li>
					</ul>
				  </div>
				</div>
<?php include template("content","footer"); ?>