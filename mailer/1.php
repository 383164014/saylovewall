<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="../css/index.css">
请稍后
</head>
<div class="mail">
<?php


require_once("functions.php");



$flag = sendMail('$to','西京表白墙','快来看看有人给你表白了.');

if($flag){
    echo "发送邮件成功！";
}else{
    echo "发送邮件失败！";
}
?>
</div>
</html>