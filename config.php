<?php


$conn=mysqli_connect("localhost","root","","mylove");

if(mysqli_connect_errno($conn)){
	die("数据库链接失败");
}

mysqli_query($conn,"set names utf8");


?>