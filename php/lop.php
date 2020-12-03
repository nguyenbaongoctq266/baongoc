<?php 
  $conn = new mysqli('localhost','root','','thanhvien') ;
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Đăng kí</title>	
</head>
<body>  
<h1>Nội Dung</h1>
     <div id="noidung">
        <table width="28%">
           <tr>
             <th>STT</th>
             <th>Tên Sinh Viên</th>
             <th>Mã Sinh Viên</th>
             <th>Xử Lý</th>
           </tr>
        

	<?php
	 $sql = "SELECT * FROM sinhvien ";
    $result = mysqli_query( $conn,$sql);
    if(mysqli_num_rows($result) > 0){
       $i = 0 ;
       while($row = mysqli_fetch_assoc($result)) {
          $i++;
          $tensv = $row['tensv'];
          $masv = $row['masv'];
          echo "<tr>";
          echo "<td>$i</td>";
          echo "<td>$tensv</td>";
          echo "<td>$masv</td>";
          echo "</td>";
          echo "<td><a href='delete.php?id=$masv'>xóa</a>
            | <a href='update.php?id=$masv'>sửa</a></td></tr>";
          }
         
    }
	
	?>
   </table>
     </div>
 
     <form action="" method="post">
     <table>
         <tr>
           <td>Tên sinh viên:</td>
           <td><input type="text" name="tensv"></td>
         </tr>
         <tr>
            <td>Mã sinh viên:</td>
            <td><input type="text" name="masv"></td>
         </tr>
         <tr>
           <td colspan="2">
             <input type="submit" value="thêm mới" name="insert">
           </td>
         </tr>
     </table>
     </form>

<?php 
       if(isset($_POST['insert'])){
          $tensv = $_POST['tensv'];
          $masv = $_POST['masv'];
          $sql = "INSERT INTO sinhvien VALUES('$tensv','$masv')";
          mysqli_query($conn,$sql);
        
       }


 ?>


</body>