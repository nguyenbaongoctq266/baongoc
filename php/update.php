<?php 
  $conn = new mysqli('localhost','root','','thanhvien') ;
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
</head>
<body>  
<h1>Nội Dung</h1>
     <div id="noidung">
       <form action="" method="post">
           Tên Sinh Viên: <input type="text" name="tensv"
           value="<?php $_GET['id']?>">
           <br>
           <input type="submit" name="update" value="chấp nhận">
       </form>
     </div>   

	<?php
    if(isset($_POST['update'])){
        $tensv= $_POST['tensv'];
        $masv = $_GET['id'];
        $sql = "UPDATE sinhvien SET tensv='$tensv' WHERE masv='$masv' ";
        $result = mysqli_query( $conn,$sql);
        header('location:lop.php');
    }
      
    
	?>

</body>