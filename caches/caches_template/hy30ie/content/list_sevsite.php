<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
	<meta name="description" content="<?php echo $SEO['description'];?>">
    <meta http-equiv="x-ua-compatible" content="ie=7" />
    <link href="<?php echo TEMPLETS_SKIN;?>/css/global.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo TEMPLETS_SKIN;?>/css/about.css" rel="stylesheet" type="text/css" />
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
				<?php include template("content","single_left"); ?>
				<div class="content">
				  <div class="Rec_top">
					<ul class="Rec_t Cbg">
					</ul>
					<ul class="Rec_line">
					</ul>
				  </div>
				  <div class="N_con">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fadc5666ba78cce6a16126d255f6d729&action=lists&catid=%24catid&num=3&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 3;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<dl class="N_sites fixed">
						<dt><a href="<?php echo $r['url'];?>">
						<?php if($parentid==15) { ?>
							<img src="<?php echo $r['thumb'];?>" alt="" width="155" height="155" />
						<?php } else { ?>
							<img src="<?php echo $r['thumb'];?>" alt="" width="129" height="179" />
						<?php } ?>
						</a></dt>
						<dd class="dd_title"><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></dd>
						<dd class="dd_info"><?php echo $r['description'];?></dd>
					</dl>
					<div class="spline"></div>
					<?php $n++;}unset($n); ?>
					<div id="pages" class="text-c"><?php echo $pages;?></div>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</div>
				 
				</div>
<?php include template("content","footer"); ?>