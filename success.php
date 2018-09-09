<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>后台界面</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/christmassnow.js"></script>
<link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<?php
	
	require("config.php");
	
	
	$sql="select * from mylove";
	
	$query=mysqli_query($conn,$sql);
	
	?>
<body>
<div class="container">
	<h1 class="page-header">用户管理中心</h1>
		<div class="row">
			<div class="col-xs-2">
				<ul class="nav nav-pills nav-stacked ">
					<li class="active"><a>留言内容管理</a></li>
				</ul>
			</div>
			<div class="col-xs-10">
				<table class="table table-bordered table-hover">
					<tr>
						<td>昵称</td>
						<td>发表对象</td>
						<td>内容</td>
						<td>邮箱地址</td>
						<td>发表时间</td>
					</tr>
					
				<?php
					
					foreach($query as $key=>$val){
						$time=date("Y-m-d H:i",$val['time']);
						echo "<tr>";
							echo "<td>{$val['name']}</td>";
							echo "<td>{$val['obj']}</td>";
							echo "<td>{$val['info']}</td>";
							echo "<td>{$val['mail']}</td>";
							echo "<td>{$time}</td>";					
						echo "</tr>";
						
					}
					
					
					
					
					
					?>
					
					
					
					
				</table>
			</div>
		</div>
	</div>
</body>
</html>