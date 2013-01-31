<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title></title>
</head>
<body>
	<?php
		if(isset($_POST['dosubmit']))
		{
			$taskid = $_POST['taskid'];
			$xml_array = simplexml_load_file('http://localhost.phpcms.com/getdata.php?taskid='.$taskid);
			$xValue = "";
			foreach($xml_array as $key => $value)
			{
				if($key == "xValue")
				{
					$xValue = $value;
				}
			}
			$xValue = substr($xValue,'#',-1);
			//echo "xValue=".$xValue;
			$arr_rank = Array();
			$arr_temp = explode('#',$xValue);
			//print_r($arr_temp);
			foreach($arr_temp as $key => $value)
			{
				$arr_temp2 = explode('|',$value);
				foreach($arr_temp2 as $k => $v)
				{
					$arr_rank[$key][] = $v;
				}
			}
			print_r($arr_rank);
			
		}

	?>
	
	<form action="" method="post">
		<input type="text" name="taskid" id="taskid" />
		<input type="submit" name="dosubmit" value="查询" />
	</form>
</body>
</html>