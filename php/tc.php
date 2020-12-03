<head>
	<title>Đăng kí</title>
	<meta charset="utf-8">
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
		}</style>
</head>
<body>
<?php
	echo(" Bạn đã đăng kí thành công tài khoản của mình");
?>
<div class="conten1">
<br>
	<form action="" method="post">
		<input id="tk" type="submit" name="submit" value="Về trang chủ"/>
	</form>
	<?php
		if(isset($_POST["submit"])){
			header("location:trangchinh.php");
		}
	?>
</div>
</body>