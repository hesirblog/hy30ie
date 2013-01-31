<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
	<meta name="description" content="<?php echo $SEO['description'];?>">
    <meta http-equiv="x-ua-compatible" content="ie=7" />
    <link href="<?php echo TEMPLETS_SKIN;?>/css/global.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo TEMPLETS_SKIN;?>/css/sitedetail.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo TEMPLETS_SKIN;?>/js/jquery-1.8.3.min.js" language="javascript" type="text/javascript"></script>
    <script src="<?php echo TEMPLETS_SKIN;?>/js/jquery-cookie.js" language="javascript" type="text/javascript"></script>
</head>
<?php include template("content","header"); ?>
	<div id="nav_inf">
	  当前位置：
	  <a class="nb" href="/">
		首页
	  </a>
	  &gt; <?php echo catpos($catid);?> 列表
	</div>
	<div class="filter-context">
		<div class="enterprise_rightText">
		  <div class="cr_text cr_bottom">
			<div class="jbxl">
			  成品系列￥1680
			</div>
			<ul>
			  <li>
				国际域名：1个
			  </li>
			  <li>
				数据库空间：100M 支持PHP/MySQL
			  </li>
			  <li>
				企业邮箱：G容量5用户邮局
			  </li>
			  <li>
				开发语言：php 版本：中,英,繁体版
			  </li>
			  <li>
				模板构成:自由操作，建站周期短，是尝试上网客户的首选
			  </li>
			  <li>
				网站功能:栏目管理和文章、图文、下载、广告等管理功能
			  </li>
			  <li>
				设计工期：2天工作日 了解详情:
				<a href="<?php echo $CATEGORYS['31']['url'];?>">
				  点击进入
				</a>
			  </li>
			</ul>
		  </div>
		  <div class="cr_text cr_bottom">
			<div class="dzxl">
			  大众系列￥2280
			</div>
			<ul>
			  <li>
				国际域名：1个
			  </li>
			  <li>
				数据库空间：200M 支持PHP/MySQL
			  </li>
			  <li>
				页面数量：18个页面以内
			  </li>
			  <li>
				开发语言：PHP 版本：中,英文版
			  </li>
			  <li>
				模板构成：后台管理+新闻+产品展示+留言板+计数器+QQ在线
			  </li>
			  <li>
				网站特点：客户提供网站，做仿站的网页美术效果+动画特效。
			  </li>
			  <li>
				设计工期：7天工作日 了解详情:
				<a href="<?php echo $CATEGORYS['32']['url'];?>">
				  点击进入
				</a>
			  </li>
			</ul>
		  </div>
		  <div class="cr_text cr_bottom">
			<div class="bzxl">
			  标准系列￥2880
			</div>
			<ul>
			  <li>
				国际域名：1个
			  </li>
			  <li>
				数据库空间：300M 支持PHP/MySQL 50M
			  </li>
			  <li>
				页面数量：15个页面以内
			  </li>
			  <li>
				开发语言：php 版本：中文版
			  </li>
			  <li>
				网站特点：全新设计，网站页面精致美观，充分体现企业形象
			  </li>
			  <li>
				网站功能：后台管理+新闻+产品展示+留言板+计数器+QQ在线
			  </li>
			  <li>
				设计工期：12天工作日 了解详情:
				<a href="<?php echo $CATEGORYS['33']['url'];?>">
				  点击进入
				</a>
			  </li>
			</ul>
		  </div>
		  <div class="cr_text cr_bottom">
			<div class="swxl">
			  商务系列￥3880
			</div>
			<ul>
			  <li>
				国际域名：1个
			  </li>
			  <li>
				数据库空间：500M 支持PHP/MySQL 100M
			  </li>
			  <li>
				企业邮箱：1G容量+5用户邮局
			  </li>
			  <li>
				开发语言：PHP 版本：中文版 15页面内
			  </li>
			  <li>
				网站特点：全新设计,Flash引导动画,banner动画,页面精致美观
			  </li>
			  <li>
				网站功能：后台管理+新闻+产品展示+留言板+计数器+QQ在线
			  </li>
			  <li>
				设计工期：15天工作日 了解详情:
				<a href="<?php echo $CATEGORYS['34']['url'];?>">
				  点击进入
				</a>
			  </li>
			</ul>
		  </div>
		  <div class="cr_text cr_bottom">
			<div class="hhxl">
			  豪华系列￥4880
			</div>
			<ul>
			  <li>
				国际域名：1个
			  </li>
			  <li>
				数据库空间：800M BGP多线 200M
			  </li>
			  <li>
				企业邮箱：G容量5用户邮局
			  </li>
			  <li>
				开发语言：PHP 版本：中文版 20页面内
			  </li>
			  <li>
				网站特点：全新设计,banner动画,页面精致，充分体现企业形象
			  </li>
			  <li>
				网站功能：后台管理+新闻+图文+留言板+会员管理+网银接口
			  </li>
			  <li>
				设计工期：25天工作日 了解详情:
				<a href="<?php echo $CATEGORYS['35']['url'];?>">
				  点击进入
				</a>
			  </li>
			</ul>
		  </div>
		  <div class="cr_text cr_bottom">
			<div class="hhxl">
			  定制系列 详谈
			</div>
			<ul>
			  <li>
				团购网站制作
			  </li>
			  <li>
				商城网站建设
			  </li>
			  <li>
				对像：集团网站、政府网站、门户网站、信息发布类网站，商贸供求信息网站，网络营销型网站。
			  </li>
			  <li>
				与客户经理详谈价位
			  </li>
			  <li>
				服务电话：400-023-6181
			  </li>
			  <li>
				圣矢推荐营销型网站建设:
				<a href="<?php echo $CATEGORYS['36']['url'];?>">
				  点击进入
				</a>
			  </li>
			</ul>
		  </div>
		</div>
	</div>
<?php include template("content","footer"); ?>