<?php
defined('IN_ADMIN') or exit('No permission resources.');
$show_dialog = 1;
include $this->admin_tpl('header','admin');
?>
<div class="pad-lr-10">
<form name="myform" action="?m=seo&c=seo_admin&a=data_add&menuid=1661" method="post" id="myform">
<input type="hidden" name="dosubmit" value="1" />
<input type="hidden" name="pagesize" value="10" />
<table width="100%" cellspacing="0" class="table_form">
<tr>		
<th width="10%">站点选择：</th>
   <td>
	   <select name="sid" id="website">
	   <option value="all">同步所有站点</option>
	    <?php 
		if(count($website_category)>0)
		{
			foreach($website_category as $k => $v)
			{
		?>
			<?php
			if($v['sid']==$_REQUEST['sid'])
			{
			?>
			<option value="<?php echo $v['sid']; ?>" selected="selected"><?php echo $v['title']; ?> - <?php echo $v['url'];?></option>
			<?php
			}
			else
			{
			?>
			<option value="<?php echo $v['sid']; ?>"><?php echo $v['title']; ?> - <?php echo $v['url'];?></option>
			<?php
			}
			?>
		<?php
			}
		}
		else
		{
		?>
			<option value="">请添加网站</option>
		<?php
		}
		?>
	   </select>
   </td>
 </tr>
 <tr>
    <td></td>
    <td colspan="2">
		<input type="hidden" name="menuid" value="<?php echo $_GET['menuid']; ?>" />
		<input type="button" name="ok_btn" id="ok_btn" value="确 定" class="button" onclick="SubmitForm()"/>
	</td>
 </tr>
</table>
</form>
</div>
<script type="text/javascript">
function SubmitForm()
{
	var myform = document.getElementById("myform");
	myform.submit();
}
</script>
</body>
</html>
