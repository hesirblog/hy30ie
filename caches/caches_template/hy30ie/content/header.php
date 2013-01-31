<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><body>
	<!-- 顶部开始 -->
	<div id="top" class="fixed">
		<div class="top_left">
			<img src="<?php echo TEMPLETS_SKIN;?>/images/logo.png" width="330" height="74" alt="" />
		</div>
		<div class="top_right">
			<div class="snav_1">
				<ul>
					<li><a href="<?php echo $CATEGORYS['19']['url'];?>">付款方式</a></li>
					<li class="fenge">|</li>
					<li><a href="<?php echo $CATEGORYS['37']['url'];?>">帮助中心</a></li>
					<li class="fenge">|</li>
					<li><a href="/index.php?m=member&c=index&a=public_forget_password&siteid=1">忘记密码</a></li>
					<li class="fenge">|</li>
					<li><a href="/index.php?m=member&c=index&a=register&siteid=1">注册</a></li>
					<li class="fenge">|</li>
					<li><a href="/index.php?m=member&c=index&a=login">登录</a></li>
				</ul>
			</div>
			<div class="snav_2">
				<ul>
					<li>
					<img src="<?php echo TEMPLETS_SKIN;?>/images/tel.jpg" width="154" height="42" alt="" />
					</li>
				</ul>
				<ul class="smenu">
					<li><a href="#">双昌在线</a></li>
					<li><a href="<?php echo $CATEGORYS['38']['url'];?>">代理加盟</a></li>
					<li><a href="<?php echo $CATEGORYS['37']['url'];?>">帮助中心</a></li>
					<li><a href="<?php echo $CATEGORYS['19']['url'];?>">付款方式</a></li>
					<li><a href="#">官方微博</a><img src="<?php echo TEMPLETS_SKIN;?>/images/t2.jpg" alt="" /></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- 顶部结束 -->
	
	<!-- 导航开始 -->
	<div id="nav" class="fixed">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
        	<ul class="naver">
			    <li style=" margin-right:10px;"></li>
			    <li class="home">
				   <span class="NavL"></span>
				   <span class="NavM"><a href="/" hidefocus="true" class="HomeBG">首页</a>
				   </span>
				   <span class="NavR">
				   </span>
			    </li>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li class="sp"></li>
					<li <?php if($catid==$r[catid] || $top_parentid==$r[catid]) { ?> class="cur"<?php } ?>>
						<span class="NavL"></span>
						<span class="NavM"><a href="<?php echo $r['url'];?>" hidefocus="true"><?php echo $r['catname'];?></a></span>
						<span class="NavR"></span>
					</li>
				<?php $n++;}unset($n); ?>
				<li class="sp"></li>
				<li <?php if($catid==2) { ?> class="cur"<?php } ?>>
				  <span class="NavL"></span>
				  <span class="NavM"><a href="<?php echo $CATEGORYS['2']['url'];?>" hidefocus="true"><?php echo $CATEGORYS['2']['catname'];?></a></span>
				  <span class="NavR"></span>
				</li>
            </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</div>
	<!-- 导航结束 -->
	
	<div id="mainbg">
		<!-- 主体开始 -->
		<div id="body" class="fixed">
			<div id="c_left"></div>
			<div id="content">