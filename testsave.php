<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
</head>
<body>
	<form action="/api.php?op=save" method="post">
	<ul>
		<li>站点ID：<input type="text" name="sid" id="sid" value="1" /></li>
		<li>关键词ID：<input type="text" name="kid" id="kid" value="2" /></li>
		<li>页面：<input type="text" name="rpage" id="rpage" value="2" /></li>
		<li>排名：<input type="text" name="rank" id="rank" value="18" /></li>
		<li>
		<input type="hidden" name="dosave" />
		<input type="submit" value="提交" /></li>
	</ul>
	</form>
</body>
</html>