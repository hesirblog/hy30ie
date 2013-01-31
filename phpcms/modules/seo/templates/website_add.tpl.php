<?php
defined('IN_ADMIN') or exit('No permission resources.');
$show_dialog = 1;
include $this->admin_tpl('header','admin');
?>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#title").formValidator({onshow:"请输入网站名称",onfocus:"网站名称不能为空"}).inputValidator({min:1,max:999,onerror:"网站名称不能为空"}).ajaxValidator({
	    type : "GET",
		url : "",
		data :"m=seo&c=seo_admin&a=public_checktitle_ajax",
		datatype : "html",
		async:'false',
		success : function(data){
            if( data == "1" ) {
                return true;
			} else {
                return false;
			}
		},
		buttons: $("#dosubmit"),
		onerror : "对不起，此网站名称已存在",
		onwait : "正在验证请稍后…"
	});
	$("#url").formValidator({onshow:"请输入网站地址",onfocus:"网址格式如 http://www.qq.com"}).inputValidator({min:1,max:999,onerror:"网站地址不能为空"}).regexValidator({regexp:"url",datatype:"enum",onerror:"错误的网站URL格式"}).ajaxValidator({
	    type : "GET",
		url : "",
		data :"m=seo&c=seo_admin&a=public_checkurl_ajax",
		datatype : "html",
		async:'false',
		success : function(data){
            if( data == "1" ) {
                return true;
			} else {
                return false;
			}
		},
		buttons: $("#dosubmit"),
		onerror : "对不起，此域名已存在",
		onwait : "正在验证请稍后…"
	});
	$("#ftp_ip").formValidator({onshow:"请输入FTP地址",onfocus:"FTP地址不能为空"}).inputValidator({min:1,max:999,onerror:"FTP地址不能为空"});
	$("#ftp_user").formValidator({onshow:"请输入FTP账号",onfocus:"FTP账号不能为空"}).inputValidator({min:1,max:999,onerror:"FTP账号不能为空"});
	$("#ftp_port").formValidator({onshow:"请输入FTP端口",onfocus:"FTP端口不能为空"}).inputValidator({min:1,max:999,onerror:"FTP端口不能为空"});
	$("#ftp_pwd").formValidator({onshow:"请输入FTP密码",onfocus:"FTP密码不能为空"}).inputValidator({min:1,max:999,onerror:"FTP密码不能为空"});
	$("#L_3360-1").formValidator({onshow:"请选择行业分类",onfocus:"行业分类不能为空"}).inputValidator({min:1,max:999,onerror:"行业分类不能为空"});
	$("#L_3360-2").formValidator({onshow:"请选择子行业分类",onfocus:"子行业分类不能为空"}).inputValidator({min:1,max:999,onerror:"子行业分类不能为空"});
	$("#userid").formValidator({onshow:"请选择用户ID",onfocus:"用户ID不能为空"}).inputValidator({min:1,max:999,onerror:"用户ID不能为空"});
	$("#status").formValidator({onshow:"请选择站点状态",onfocus:"请选择站点状态"}).inputValidator({min:1,max:999,onerror:"未选择站点状态"});
	$(":checkbox[name='info[searchtype][]']").formValidator({onshow:"请选择搜索引擎",onfocus:"请至少选择1个搜索引擎",oncorrect:"选择正确"}).inputValidator({min:1,onerror:"请至少选择1个搜索引擎"});
	
	//回车提交数据
	$(document).keydown(function(event){
	  if(event.keyCode ==13){
		$("#dosubmit").click();
	  }
	});
	
	var SiteTitle = $("#title");
	var userid = $("#userid");
	userid.change(function()
	{
		SiteTitle.val(userid.find("option:selected").text());
	});
	
})
//-->
</script>

<div class="pad-lr-10">
<form name="myform" action="?m=seo&c=seo_admin&a=website_add" method="post" id="myform">
			<table width="100%" cellspacing="0" class="table_form">
				 <tr>		
					<th>用户ID：</th>
				    <td>
					<select name="info[userid]" id="userid">
						<option value="">请选择用户ID</option>
						<?php
						foreach($arr_userid as $k => $v)
						{
						?>
						<option value="<?php echo $v['userid']?>" title="<?php echo $v['username']; ?>" ><?php if(!empty($v['nickname'])){echo $v['nickname'];}else{ echo $v['username']; }?></option>
						<?php
						}
						?>
					</select>
					</td>
				 </tr>
				 <?php if($_SESSION['roleid']==1)
				 {
				 ?>
				 <tr>		
					<th>优化人员ID:</th>
				    <td>
					<select name="info[roleuser]" id="roleuser">
						<option value="">请选择用户ID</option>
						<?php
						foreach($arr_seoner as $k => $v)
						{
						?>
						<option value="<?php echo $v['userid']?>" title="<?php echo $v['username']; ?>" ><?php if(!empty($v['realname'])){echo $v['realname'];}else{ echo $v['username']; }?></option>
						<?php
						}
						?>
					</select>
					</td>
				 </tr>
				<?php
				}
				else
				{
				 ?>
				 <input type="hidden" name="info[roleuser]" id="roleuser" value="<?php echo $_SESSION['userid']; ?>" />
				 <?php
				 }
				 ?>
				 <tr>		
					<th>站点名称：</th>
				   <td><input name="info[title]" type="text" id="title" size="30" value=""  class="input-text"/></td>
				 </tr>
				 <tr>
				   <th>站点URL：</th>
				   <td><input name="info[url]" type="text" id="url" size="30" value="http://"  class="input-text"/></td>
				 </tr>
				 <tr>
				 	<th>所属行业：</th>
					<td colspan="2">
					<div id="L_3360"></div>
					<?php
						echo menu_linkage(3360,'L_3360',3426);
					?>
					</td>
				 </tr>
				 <tr>
				   <th>FTP 地址：</th>
				   <td><input name="info[ftp_ip]" type="text" id="ftp_ip" size="30" value="127.0.0.1" onfocus="if(this.value=='127.0.0.1'){this.value='';}" onblur="if(this.value==''){this.value='127.0.0.1';}"  class="input-text"/></td>
				 </tr>
				 <tr>
				   <th>FTP 账号：</th>
				   <td><input name="info[ftp_user]" type="text" id="ftp_user" size="30" value="guest" onfocus="if(this.value=='guest'){this.value='';}" onblur="if(this.value==''){this.value='guest';}"  class="input-text"/></td>
				 </tr>
				 <tr>
				   <th>FTP 密码：</th>
				   <td><input name="info[ftp_pwd]" type="text" id="ftp_pwd" size="30" value="guest" onfocus="if(this.value=='guest'){this.value='';}" onblur="if(this.value==''){this.value='guest';}" class="input-text"/></td>
				 </tr>
				 <tr>
				   <th>FTP 端口：</th>
				   <td><input name="info[ftp_port]" type="text" id="ftp_port" size="30" value="21" onfocus="if(this.value=='21'){this.value='';}" onblur="if(this.value==''){this.value='21';}"  class="input-text"/></td>
				 </tr>
				  <tr>
				   <th>优化搜索引擎：</th>
				   <td>
					<input type="checkbox" name="info[searchtype][]" id="s1" value="1" checked="checked" /> 百度 <input type="checkbox" name="info[searchtype][]" id="s2" value="2" /> 搜搜 <input type="checkbox" name="info[searchtype][]" id="s3" value="3" /> 搜狗
				   </td>
				 </tr>
				 <tr>
				   <th>站点状态：</th>
				   <td>
					<?php echo form::select($website_status,2,'name="info[status]" id="status"','请选择状态','')?>
				   </td>
				 </tr>
				 <tr>
				   <th>备  注：</th>
				   <td><textarea name="info[remark]"  id="remark" rows="5" cols="50" ></textarea></td>
				 </tr>
				 <tr>
				   <td></td>
				    <td colspan="2">
						<input type="hidden" name="menuid" value="<?php echo $_GET['menuid'];?>" />
						<input type="submit" name="dosubmit" id="dosubmit" value="确 定" class="button"/>
						<input type="button" value="返回" class="button" onclick="javascript:history.back(-1)"/>
					</td>
				 </tr>
			   </table>
			   </form>
</div>
</body>
</html>
