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
				  <a class="nb" href="#">
					首页
				  </a>
				  &gt; <?php echo catpos($catid);?> <?php echo $title;?>
				</div>
				<?php include template("content","single_left"); ?>
				<div class="content">
				  <div class="Rec_top">
					<ul class="Rec_t Cbg">
					</ul>
					<ul class="Rec_line">
					</ul>
				  </div>
					<div class="newsdetails_con">
						<ul>
						  <li class="newsdetails_title">
							<?php echo $title;?>
						  </li>
						  <li class="newsdetails_author">
							时间：<?php echo $inputtime;?> &nbsp;&nbsp;&nbsp;来源：<?php echo $copyfrom;?>&nbsp;&nbsp;&nbsp;作者：<?php echo AUTHOR;?>&nbsp;&nbsp;&nbsp;点击：<span id="hits"></span>
						  </li>
						  <li class="nds_con">
							<?php echo $content;?>
						  </li>
						  <li class="chapter" style="margin-top:30px;margin-bottom:10px" >
							<p>
								<strong>相关热词搜索：</strong>
								<?php $n=1;if(is_array($keywords)) foreach($keywords AS $keyword) { ?>
								<a href="<?php echo APP_PATH;?>index.php?m=content&c=tag&catid=<?php echo $catid;?>&tag=<?php echo urlencode($keyword);?>" class="blue"><?php echo $keyword;?>
								</a> 	
								<?php $n++;}unset($n); ?>
							</p>
						  </li>
						  <li class="chapter">
							 <strong>上一篇：</strong><a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a>
						  </li>
						  <li class="chapter">
							<strong>下一篇：</strong><a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a>
						  </li>
						  <li>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=efc05c35c78f15f44042bf51a8348507&action=relation&relation=%24relation&id=%24id&catid=%24catid&num=5&keywords=%24rs%5Bkeywords%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'relation')) {$data = $content_tag->relation(array('relation'=>$relation,'id'=>$id,'catid'=>$catid,'keywords'=>$rs[keywords],'limit'=>'5',));}?>
							  <?php if($data) { ?>
								<div class="related">
									<h5 class="blue">延伸阅读：</h5>
									<ul>
										<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
											<li>·<a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a><span>(<?php echo date('Y-m-d',$r[inputtime]);?>)</span></li>
										<?php $n++;}unset($n); ?>
									</ul>
								</div>
							  <?php } ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						  </li>
						</ul>
						<div class="Article-Tool">
						  分享到：
						  <img src="http://v.t.qq.com/share/images/s/weiboicon16.png" style="padding-bottom:3px;" onclick="postToWb();" class="cu" title="分享到腾讯微博"/>
						  <script type="text/javascript">
							function postToWb(){
								var _t = encodeURI(document.title);
								var _url = encodeURIComponent(document.location);
								var _appkey = encodeURI("cba3558104094dbaa4148d8caa436a0b");
								var _pic = encodeURI('<?php echo $thumb;?>');
								var _site = '';
								var _u = 'http://v.t.qq.com/share/share.php?url='+_url+'&appkey='+_appkey+'&site='+_site+'&pic='+_pic+'&title='+_t;
								window.open( _u,'', 'width=700, height=680, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );
							}
							</script>
							<script type="text/javascript">document.write('<a href="http://v.t.sina.com.cn/share/share.php?url='+encodeURIComponent(location.href)+'&appkey=3172366919&title='+encodeURIComponent('<?php echo new_addslashes($title);?>')+'" title="分享到新浪微博" class="t1" target="_blank">&nbsp;</a>');</script>
							  <script type="text/javascript">document.write('<a href="http://www.douban.com/recommend/?url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent('<?php echo new_addslashes($title);?>')+'" title="分享到豆瓣" class="t2" target="_blank">&nbsp;</a>');</script>
							  <script type="text/javascript">document.write('<a href="http://share.renren.com/share/buttonshare.do?link='+encodeURIComponent(location.href)+'&title='+encodeURIComponent('<?php echo new_addslashes($title);?>')+'" title="分享到人人" class="t3" target="_blank">&nbsp;</a>');</script>
							  <script type="text/javascript">document.write('<a href="http://www.kaixin001.com/repaste/share.php?rtitle='+encodeURIComponent('<?php echo new_addslashes($title);?>')+'&rurl='+encodeURIComponent(location.href)+'&rcontent=" title="分享到开心网" class="t4" target="_blank">&nbsp;</a>');</script>
							  <script type="text/javascript">document.write('<a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='+encodeURIComponent(location.href)+'" title="分享到QQ空间" class="t5" target="_blank">&nbsp;</a>');
							</script>
							<span id='favorite'>
								<a href="javascript:;" onclick="add_favorite('<?php echo addslashes($title);?>');" class="t6">收藏</a>
							</span>
						</div>
						<script type="text/javascript">
						<!--
							function show_ajax(obj) {
								var keywords = $(obj).text();
								var offset = $(obj).offset();
								var jsonitem = '';
								$.getJSON("<?php echo APP_PATH;?>index.php?m=content&c=index&a=json_list&type=keyword&modelid=<?php echo $modelid;?>&id=<?php echo $id;?>&keywords="+encodeURIComponent(keywords),
										function(data){
										var j = 1;
										var string = "<div class='point key-float'><div style='position:relative'><div class='arro'></div>";
										string += "<a href='JavaScript:;' onclick='$(this).parent().parent().remove();' hidefocus='true' class='close'><span>关闭</span></a><div class='contents f12'>";
										if(data!=0) {
										  $.each(data, function(i,item){
											j = i+1;
											jsonitem += "<a href='"+item.url+"' target='_blank'>"+j+"、"+item.title+"</a><BR>";
											
										  });
											string += jsonitem;
										} else {
											string += '没有找到相关的信息！';
										}
											string += "</div><span class='o1'></span><span class='o2'></span><span class='o3'></span><span class='o4'></span></div></div>";		
											$(obj).after(string);
											$('.key-float').mouseover(
												function (){
													$(this).siblings().css({"z-index":0})
													$(this).css({"z-index":1001});
												}
											)
											$(obj).next().css({ "left": +offset.left-100, "top": +offset.top+$(obj).height()+12});
										});
							}

							function add_favorite(title) {
								$.getJSON('<?php echo APP_PATH;?>api.php?op=add_favorite&title='+encodeURIComponent(title)+'&url='+encodeURIComponent(location.href)+'&'+Math.random()+'&callback=?', function(data){
									if(data.status==1)	{
										$("#favorite").html('收藏成功');
									} else {
										alert('请登录');
									}
								});
							}

						$(function(){
						  $('#Article .content img').LoadImage(true, 660, 660,'<?php echo IMG_PATH;?>s_nopic.gif');    
						})
						//-->
						</script>
						<!-- 点击次数 -->
						<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
					</div>
				</div>
<?php include template("content","footer"); ?>				