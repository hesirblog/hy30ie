<?php
defined('IN_ADMIN') or exit('No permission resources.');
$show_dialog = 1;
include $this->admin_tpl('header','admin');
?>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#title").formValidator({onshow:"请输入网站名称",onfocus:"网站名称不能为空"}).inputValidator({min:1,max:999,onerror:"网站名称不能为空"});
	$("#url").formValidator({onshow:"请输入网站地址",onfocus:"网址格式如 http://www.qq.com"}).inputValidator({min:1,max:999,onerror:"网站地址不能为空"}).regexValidator({regexp:"url",datatype:"enum",onerror:"错误的网站URL格式"});
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
})
//-->
</script>

<div class="pad-lr-10">
<form name="myform" action="?m=seo&c=seo_admin&a=website_edit" method="post" id="myform">
<table width="100%" cellspacing="0" class="table_form">
	 <tr>		
		<th>用户ID：</th>
		<td>
		<select name="info[userid]" id="userid">
			<option value="">请选择用户ID</option>
			<?php
			foreach($arr_userid as $k => $v)
			{
				$username = $v['nickname']==''?$v['username']:$v['nickname'];
				if($v['userid'] == $info['userid'])
				{
					echo "<option value=\"".$v['userid']."\" selected=\"selected\" title=\"".$v['username']."\">".$username."</option>";
				}
				else
				{
					echo "<option value=\"".$v['userid']."\" title=\"".$v['username']."\">".$username."</option>";
				}
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
			$str = "";
			foreach($arr_seoner as $k => $v)
			{
				$username = $v['realname']==''?$v['username']:$v['realname'];
				if($v['userid'] == $info['roleuser'])
				{
					$str.= "<option value=\"".$v['userid']."\" selected=\"selected\" title=\"".$v['username']."\">".$username."</option>";
				}
				else
				{
					$str.= "<option value=\"".$v['userid']."\" title=\"".$v['username']."\">".$username."</option>";
				}
			}
			echo $str;
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
	   <td><input name="info[title]" type="text" id="title" size="30" value="<?php echo $info['title']?>"  class="input-text"/></td>
	 </tr>
	 <tr>
	   <th>站点URL：</th>
	   <td><input name="info[url]" type="text" id="url" size="30" value="<?php echo $info['url']?>"  class="input-text"/></td>
	 </tr>
	 <tr>
		<th>所属行业：</th>
		<td colspan="2">
		<div id="L_3360"></div>
		<?php
			echo menu_linkage(3360,'L_3360',$info['typeson']);
		?>
		</td>
	 </tr>
	 <tr>
	   <th>FTP 地址：</th>
	   <td><input name="info[ftp_ip]" type="text" id="ftp_ip" size="30" value="<?php echo $info['ftp_ip']?>"  class="input-text"/></td>
	 </tr>
	 <tr>
	   <th>FTP 账号：</th>
	   <td><input name="info[ftp_user]" type="text" id="ftp_user" size="30" value="<?php echo $info['ftp_user']?>"  class="input-text"/></td>
	 </tr>
	 <tr>
	   <th>FTP 密码：</th>
	   <td><input name="info[ftp_pwd]" type="text" id="ftp_pwd" size="30" value="<?php echo $info['ftp_pwd']?>"  class="input-text"/></td>
	 </tr>
	 <tr>
	   <th>FTP 端口：</th>
	   <td><input name="info[ftp_port]" type="text" id="ftp_port" size="30" value="<?php echo $info['ftp_port']?>"  class="input-text"/></td>
	 </tr>
	  <tr>
	   <th>优化搜索引擎：</th>
	   <td>
	   <?php
		$s1=count(explode('1',$info['searchtype']));
		$s2=count(explode('2',$info['searchtype']));
		$s3=count(explode('3',$info['searchtype']));
		if($s1>1)
		{
	   ?>
			<input type="checkbox" name="info[searchtype][]" checked="checked" id="s1" value="1" /> 百度
		<?php
		}
		else
		{
		?>
			<input type="checkbox" name="info[searchtype][]" id="s1" value="1" /> 百度
		<?php
		}
		if($s2>1)
		{
	   ?>
			<input type="checkbox" name="info[searchtype][]" checked="checked" id="s2" value="2" /> 搜搜
		<?php
		}
		else
		{
		?>
			<input type="checkbox" name="info[searchtype][]" id="s2" value="2" /> 搜搜
		<?php
		}
		if($s3>1)
		{
	   ?>
			<input type="checkbox" name="info[searchtype][]" checked="checked" id="s3" value="3" /> 搜狗
		<?php
		}
		else
		{
		?>
			<input type="checkbox" name="info[searchtype][]" id="s3" value="3" /> 搜狗
		<?php
		}
		?>
	   </td>
	 </tr>
	 <tr>
	   <th>站点状态：</th>
	   <td>
		<?php echo form::select($website_status,$info['status'],'name="info[status]" id="status"','请选择状态','')?>
	   </td>
	 </tr>
	 <tr>
	   <th>备  注：</th>
	   <td><textarea name="info[remark]"  id="remark" rows="5" cols="50" ><?php echo $info['remark']?></textarea></td>
	 </tr>
	 <tr>
	   <td></td>
	    <td colspan="2">
			<label>
				<input type="hidden" name="info[sid]" value="<?php echo $_GET['sid'];?>" />
				<input type="hidden" name="menuid" value="<?php echo $_GET['menuid'];?>" />
				<input type="submit" name="dosubmit" id="dosubmit" value="确 定" class="button"/>
				<input type="button" value="返回" class="button" onclick="javascript:window.location.href='?m=seo&c=seo_admin&a=init';"/>
			</label>
	    </td>
	 </tr>
</table>
</form>

</div>
</body>
</html>
