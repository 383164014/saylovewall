<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	
	require("config.php");
	
	$name=$_POST['name'];	//昵称
	
	$info=$_POST['info'];	//内容
	
	$mail=$_POST['mail'];	//邮箱地址
	
	$obj=$_POST['obj'];	//对象
	
	$time=time();
	
	if(empty($mail)){
		$mail=1;
		
	}else{
		
		require_once("mailer/functions.php");
			
		
		
	}
	
	$sql="insert into mylove (name,obj,info,mail,time) values ('$name','$obj','$info','$mail','$time')";
	
	$query=mysqli_query($conn,$sql);
	
	if($query){
		return 1;
	}
	
	
	
	?>
</body>
</html>