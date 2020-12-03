<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Đăng kí</title>
	<style>
		body{
		width:400px;
			height:auto;
			margin:auto;
			margin-top:150px;
		}
		.conten1{
			width:300px;
			height:auto;
			margin:auto;
		}
		#tk{
			width:200px;
			height:30px;
			border-radius:10px;
		}
		#tk1{
			width:100px;
			height:30px;
			border-radius:10px;
		}
	</style>
</head>
<body>
<div class="conten1">
<!-- đăng kí-->
	<form action="" method="post">
		<label>Tài khoản</label>
		<br>
		<input id="tk" type="text" name="taikhoan"/>
		<br>
		<label>Mật khẩu</label>
		<br>
		<input id="tk" type="password" name="pass"/>
		<br>
		<input id="tk1" type="submit" name="submit" value="Đang kí"/>
	</form>
	<?php
    include("dangnhap1.php");
	if(isset($_POST["submit"])){
		$name=mysqli_real_escape_string($conn,$_POST["taikhoan"]);
		$pass=mysqli_real_escape_string($conn,$_POST["pass"]);
		$pass=md5($pass);
		$sql="INSERT INTO dangnhap(name,pass)VALUE(
		'$name',
		'$pass'
		)";
		$query=mysqli_query($conn,$sql);
		header("location:trangchinh.php");
	}
	?>
</div>
</body>