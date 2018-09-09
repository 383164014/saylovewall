<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>mylove</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/christmassnow.js"></script>
<link rel="stylesheet" href="bs/css/bootstrap.min.css">

<script src="bs/js/bootstrap.min.js"></script>
<script>
            $(document).ready(function() {
                $('body').christmassnow({
                    snowflaketype: 23, // 一共有25种雪花的形状可以选择，大家可以试试从1-25都换了看看效果
                    snowflakesize: 1, // 1为随机大小，2为统一自定义大小，建议1，毕竟雪花不是统一一个大小的吧
                    snowflakedirection: 1, // 1意味着没有风（上下），2是随机的，3左右、4左右
                    snownumberofflakes: 4, //雪花数量
                    snowflakespeed: 5, // 默认是10 掉落速度越大 就掉的越快
                    flakeheightandwidth: 15 // 如果选项flakesize的值是2，flakeheightandwidth值应该是16×16像素。
                });
            });
        </script>
         <style>
			body:before{	/*	背景	*/
			  content: ' ';
			  position: fixed;
			  z-index: -1;
			  top: 0;
			  right: 0;
			  bottom: 0;
			  left: 0;
			  background: url('assets/background.jpg')   no-repeat;
			  background-size: cover;
			}
			 
			 .row{
				 margin-left: 0;
				 margin-right: 0;
			 }
			 
			 .title{
				 
				 font-family: 微软雅黑;
				 color:#e87461;
				 border-bottom: none;
				 
			 }
			 .header{
				 margin-top: 20px;
			 }
			 
			 .written{
				margin-top: 20px;	 
			 }
			 
			 
			 .panel{
				 opacity: 0.8;
				color: #e87461;
				 
			 }
			 
			 .panel-body p{
				 
				 
				word-break: break-all;
				 
				 
			 }
			 .info{
				text-indent: 2em;
			 }
			 .panel a{
				 font-family: 微软雅黑;
				 color: #e87461;	
				 text-decoration: none;
				 line-height: 15px;
			 }
			 .footer{
				 margin-bottom: 20px;
			 }
			 .btn-send{
				 background: #e87461;
				 margin-bottom: 10px;
				 color: #FFFFFF;
			 }
		 .btn.focus, .btn:focus, .btn:hover {
			color: #FFFFFF;
			text-decoration: none;
		}
			 
			 textarea{
				 height: 100px;
			 }
			 
			 
			
        </style>
</head>

<body>
	<div class="drop">
		
	</div>
	<div class="container">
		<div class="header">
			<h1 class="pull-left title">MyLove</h1>
			<h1 class="pull-right "><button class="btn btn-send">我要留言</button></h1>
		</div>
		<div class="clearfix"></div>
		
		<?php
		
		
		require("config.php");
		
		$sql="select *from mylove order by time desc";
		
		$query=mysqli_query($conn,$sql);
		
		$num=mysqli_num_rows($query);
		
		
		foreach($query as $key=>$val){
			
	
			$time=date("Y-m-d H:i",$val['time']);

			echo "<div class='written'>";
			echo "<div class='panel'>";
			echo "<div class='panel-body'>";
				echo "<p><a>留言内容:</a></p>";
				echo "<p class='info'><a >{$val['info']}</a></p>";
			echo "</div>";
			echo "<div class='panel-footer'>";
			echo "<p class='pull-left'><a>昵称:</a></p>";
			echo "<p class='pull-left'><a>{$val['name']}</a></p>";
			echo "<p class='pull-right'>发表时间</p>";
			echo "<div class='clearfix'></div>";
			echo "<p class='pull-left'>发表对象:</p>";
			echo "<p class='pull-left'>{$val['obj']}</p>";
			echo "<p class='pull-right'>{$time}</p>";
			echo "<div class='clearfix'></div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			
			
			
			
			
			
			
		}
		
		
		?>
		
		
		
		
		
	
		<footer class="">
			<p class="text-center"><img src="images/logo.png" width="15%"></p>
			<p class="text-center footer">西京学院易班发展中心提供技术支持</p>
			<p class="text-center footer">作者:兰陵美酒郁金香</p>
		</footer>
	</div>
</body>


<div id="btn-send" class="modal fade">		
			<div class="modal-dialog">		<!--	加上.modal-lg控制大小		.modal-dialog理解成是弹窗对话框	-->
				<div class="modal-content">
					<div class="modal-header">
						<div class="close" data-dismiss="modal">&times;</div>
						<h1>填写留言内容</h1>
					</div>
					<div class="modal-body">
						<form method="">
							<div class="form-group">
								<label>你的昵称:</label>
								<input type="text" class="form-control" placeholder="必填" name="name">

							</div>
							<div class="form-group">
								<label>对象名字:</label>
								<input type="text" class="form-control" placeholder="必填" name="obj">

							</div>
							<div class="form-group">
								<label>他/她的邮箱地址:</label>
								<input type="text" class="form-control" placeholder="选填 (注:填写邮箱,小易能帮您匿名发送喔)" name="mail">

							</div>
							<div class="form-group">
								<label>留言内容:</label>
								<textarea class="form-control" style="resize: none" id="info"></textarea>

							</div>
						</form>
							<div class="form-group">
								<button class="btn btn-send btn-block send">确认发送</button>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
<script>
	
$(function(){
		
	$(".btn-send").click(function(){
		$("#btn-send").modal("show");
	})
	
	
	$(".send").click(function(){
		
		var name=$("input[name='name']").val();
		
		var obj=$("input[name='obj']").val()
		
		var info=$("#info").val();
		
		var mail=$("input[name='mail']").val();
	
		
		
		
		if((name.length || obj.length)==0){
			alert('请将必填项填写完喔');
			return false;
		}
		
		if(info.length==0){
			alert('请将必填项填写完喔');
			return false;
		}
		
		
		if(mail.length>0){
			
			str=mail.match(/^\w+@\w+\.\w+$/i);	
			
			if(str){
				
				
				
				$.ajax({
					type:"post",
					
					url:"check.php",
					
					data:{name:name,obj:obj,info:info,mail:mail},
					
					success:function(data){
						if(data){
							$("form")[0].reset();
							
							alert("发送成功");
							
							location.reload();
						}	
					}
					
				})
				
				
				
			}else{
				alert('邮箱格式不正确喔');
				return false;
			}
		}else{
			$.ajax({
				type:"post",

				url:"check.php",

				data:{name:name,obj:obj,info:info},

				success:function(data){
					
					
					if(data){
						$("form")[0].reset();
						alert("发送成功");
						location.reload();
					}
					
					
				}

			})
		}
		

		

		
		
		
		
	})
	
	
	
	
	
})
	
	
	</script>






</html>