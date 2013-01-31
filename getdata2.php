<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=gb2312" />
	<title></title>
	<script type="text/javascript" src="/statics/js/jquery.min.js"></script>
	
</head>
<body>
	<?php
		if(isset($_POST['dosubmit']))
		{
			$apiurl = "http://agent.jomesoft.com/api/agentapi.aspx";
			$wAgent="101035";
			$wAction = "GetTaskRank";
			$pwd="yes12300";
			$key="50720D46C9CF2312865BFD3AD20DE6D1";
			$wMsgID = '1353555979';
			$wParam = "TaskId=32675,32676,32677";
			$wSign = strtoupper(md5($wAgent.$wAction.$wMsgID.$wParam.$key));
			$apiurl = $apiurl."?wAgent=".$wAgent."&wAction=".$wAction."&wMsgID=".$wMsgID."&wSign=".$wSign."&wParam=".$wParam;
		}
	?>
	<form action="<?php echo $apiurl;?>" method="post">
		<input type="submit" name="dosubmit" value="查询" />
	</form>
	
	
	
</body>
</html>

