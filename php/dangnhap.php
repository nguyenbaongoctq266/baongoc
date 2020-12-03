<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Đăng nhập</title>
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
		footer{
			margin:auto;
			margin-top:150px;
		}
	</style>
</head>
<body>
<div class="conten1">
<!-- đăng nhập-->
	<form action="" method="post">
		<label>Tài khoản</label>
		<br>
		<input id="tk" type="text" name="taikhoan"/>
		<br>
		<label>Mật khẩu</label>
		<br>
		<input id="tk" type="password" name="pass"/>
		<br>
		<input id="tk1" type="submit" name="submit" value="đăng nhập"/>
		<input id="tk1" type="submit" name="dk" value="Đăng kí" />
	</form>
	<?php
	session_start();
	include("dangnhap1.php");
		if(isset($_POST["submit"])){
			$name = mysqli_real_escape_string($conn,$_POST["taikhoan"]);
			$pass = mysqli_real_escape_string($conn,$_POST["pass"]);
			$pass =md5($pass);
			$sql = "SELECT*FROM dangnhap WHERE name='$name' and pass='$pass'";
			$query = mysqli_query($conn,$sql);
			$num_row = mysqli_num_rows($query);
			if($num_row != 0){
				$_SESSION['name']=$name;
				echo("đăng nhập thành công");
			}
			else{
				echo("đăng nhập không thành công");
			}
			if($_SESSION['name']!=null)
			{
				header("location:trangchu.php");
			}
		}
	?>
	<form id="tk" action="" method="post">
		<?php
			if(isset($_POST["dk"])){
				header("location:dangki.php");
			}
		?>
	</form>
</div>
</body>
<footer>
</footer>