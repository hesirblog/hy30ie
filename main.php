<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=gb2312" />
	<title></title>
</head>
<body>
	<?php 
	$param = array('userid'=>'Hesir','userpwd'=>'yes12300'); 
	$ctx = stream_context_create(
		array( 
				'http' => array( 
				'timeout' => 1 ,
				'method' => 'POST',  
				'content' => http_build_query($param, '', '&') 
			) 
		) 
	); 
	echo file_get_contents("http://localhost.phpcms.com/getdata2.php", 0, $ctx); 
	?>

	
</body>
</html>

