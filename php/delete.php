<?php 
  $conn = new mysqli('localhost','root','','thanhvien') ;

  if(isset($_GET['id'])){
    $masv = $_GET['id'];
    $sql = "DELETE FROM sinhvien WHERE masv='$masv' ";
    mysqli_query( $conn,$sql);
    header('location:lop.php');
 }
?>