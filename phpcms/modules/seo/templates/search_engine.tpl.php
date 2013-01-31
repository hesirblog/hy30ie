<?php
defined('IN_ADMIN') or exit('No permission resources.');
$show_dialog = 1;
include $this->admin_tpl('header','admin');
$a = isset($_REQUEST['a'])?$_REQUEST['a']:"";
?>
<div class="table-list">
<div class="common-form">
<?php
if($a=="init_search")
{
?>
<fieldset>
	<legend>选择搜索引擎</legend>
	<table width="100%" class="table_form">
		<tr>
			<td>
			搜索引擎：<select name="searchtype" id="searchtype">
				<option value="1">百度</option>
				<option value="2">搜搜</option>
				<option value="3">搜狗</option>
			</select>
			</td> 
		</tr>
		<tr>
			<td>
			网站地址：<?php echo $arr['url'];?>
		    </td>
		</tr>
		<tr>
			<td>
			关&nbsp;键&nbsp;词：<?php echo $arr['keywords'];?>
		    </td>
		</tr>
	</table>
</fieldset>
<?php
}
else if($a == "show_search")
{
?>
<form action="?m=seo&c=seo_admin&a=save_search" method="post">
	<input type="hidden" name="sid" value="<?php echo $rows['sid'];?>"/>
	<input type="hidden" name="kid" value="<?php echo $rows['kid'];?>"/>
	<input type="hidden" name="searchtype" value="<?php echo $rows['searchtype'];?>"/>
	<input type="hidden" name="keywords" value="<?php echo $rows['keyword'];?>"/>
	<input type="hidden" name="url" value="<?php echo $rows['url'];?>"/>
	<input type="hidden" name="rank" value="<?php echo $rows['px'];?>"/>
	<input type="hidden" name="rpage" value="<?php echo $rows['page'];?>"/>
	<input type="hidden" name="ip" value="<?php echo $rows['ip'];?>"/>
	<input type="hidden" name="city" value="<?php echo $rows['country'].$rows['region'].$rows['city'];?>"/>
	<table width="100%" class="table_form">
	<tr>
		<td>关键词</td>
		<td>网站地址</td>
		<td>所在页码</td>
		<td>百度排名</td>
		<td>访问IP</td>
		<td>国家/地区</td>
		<td>所在省份</td>
		<td>所在城市</td>
		<td>运营商</td>
	</tr>
	<tr>
		<td><?php echo $rows['keyword'];?></td>
		<td><?php echo $rows['url'];?></td>
		<td><a href="http://www.baidu.com/s?wd=<?php echo $rows['keyword'];?>&pn=<?php echo $rows['firstRow'];?>" target="_blank" class="red_font"><?php echo $rows['page'];?></a></td>
		<td><a href="http://www.baidu.com/s?wd=<?php echo $rows['keyword'];?>&pn=<?php echo $rows['firstRow'];?>" target="_blank" class="red_font"><?php echo $rows['px'];?></a></td>
		<td><?php echo $rows['ip'];?></td>
		<td><?php echo $rows['country'];?></td>
		<td><?php echo $rows['region'];?></td>
		<td><?php echo $rows['city'];?></td>
		<td><?php echo $rows['isp'];?></td>
	</tr>
	</table>
	<input type="submit" class="dialog" id="dosubmit" name="dosubmit" value="提交"/>
</form>
<?php
}
?>
<div class="bk15"></div>

</div>
</div>
</body>
</html>