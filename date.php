<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<script type="text/javascript" src="/statics/My97DatePicker/WdatePicker.js"></script>
</head>
<body>
	<form action="" method="post">
	<input type="hidden" name="dopost" value="submit" />
	<p>开始时间：<input type="text" name="start_date" id="start_date" class="Wdate" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',maxDate:'%y-%M-%d'});"  /></p>
	<p>结束时间：<input type="text" name="end_date" id="end_date" class="Wdate" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',maxDate:'%y-%M-%d'});"  /></p>
	<p><input type="submit" value="提交" /></p>
	</form>
	<?php
		$dopost = $_POST['dopost'];
		if($dopost == "submit")
		{
			echo "开始时间：".strtotime($_POST['start_date'])."<br/>";
			echo "结束时间：".strtotime($_POST['end_date']);
		}
	?>
</body>
</html>