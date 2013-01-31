<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>				<!-- 底部开始 -->
				<div id="footer" class="fixed">
				<ul id="foot">
					<li>
						<div style=" width:500px; height:95px; float:left;">
						  <ul>
							<li style="clear:both; display:inline; margin-top:30px; margin-left:34px;">
							  Copyright &copy; 2012 30ie .重庆双昌网络营销策划有限公司 All Rights Reserved.
							</li>
							<li style="margin-top:30px;">
							  <img src="<?php echo TEMPLETS_SKIN;?>/images/f6.gif">
							</li>
							<li id="search">
							  <input type="text" value="重庆双昌网络营销策划有限公司" onfocus="javascript:if(this.value=='重庆双昌网络营销策划有限公司'){this.value='';};" onblur="javascript:if(this.value==''){this.value='重庆双昌网络营销策划有限公司'};" id="search1" name="search1"/>
							</li>
							<li>
							  <input type="button" value="百度一下" id="search_btn" name="search_btn" onclick="baidu()">
							  <script type="text/javascript">
							  function baidu()
							  {
								var search1 = document.getElementById("search1");
								window.open("http://www.baidu.com/s?wd="+search1.value,"new");
							  }
							  </script>
							</li>
						  </ul>
						</div>
						<div style="padding-top:35px; height:50px; float:left; margin-left:0px; ">
						  <!--可信网站图片LOGO安装结束-->
						  <a target="_blank" alt="315网上交易保障中心" href="http://www.315online.com.cn/member/315120069.html">
							<img height="42" border="0" src="<?php echo TEMPLETS_SKIN;?>/images/315new.GIF">
						  </a>
						  <a target="_blank" alt="12321举报中心" href="http://www.12321.cn/">
							<img border="0" src="<?php echo TEMPLETS_SKIN;?>/images/friend3.gif">
						  </a>
						  <a target="_blank" alt="itrust信用中心" href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1583021507">
							<img height="30" border="0" src="<?php echo TEMPLETS_SKIN;?>/images/friend5.gif">
						  </a>
						  <a alt="工信部备案系统认证" target="_blank" href="#">
							<img height="30px" border="0" src="<?php echo TEMPLETS_SKIN;?>/images/icpba.gif">
						  </a>
						  <a alt="合肥工商" target="_blank" href="#">
							<img height="30px" border="0" src="<?php echo TEMPLETS_SKIN;?>/images/hfgs.gif">
						  </a>
						  <!-- 网站统计代码开始 -->
							 <!--  <script language="JavaScript" src="http://s95.cnzz.com/stat.php?id=4759726&amp;web_id=4759726&amp;show=pic1">
							  </script> -->
						  <!-- 网站统计代码结束 -->
						</div>
					</li>
				</ul>
				</div>
			<!-- 底部结束 -->
			</div>
			<div id="c_right"></div>
		</div>
	</div>
</body>
</html>