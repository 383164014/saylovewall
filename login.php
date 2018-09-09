<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>

<?php
	$id=$_POST['id'];
	
	$pass=$_POST['pass'];
	
	if($id==383164014 && $pass=="zxc86506859"){
		
		header("location:success.php");
	}else{
		echo "<script>alert('账号密码错误');location='admin.php'</script>";
	}
	
	
	
	?>



</body>
</html>