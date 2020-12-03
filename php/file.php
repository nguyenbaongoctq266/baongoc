<div>FILE trong php</div>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="image">
<br>
<input type="submit">
</form>
<?php 
   $url_img="";
   if(isset($_FILES)){
       $file_name = $_FILES["image"]["name"];
       $file_type = $_FILES["image"]["type"];
       $tmp_name = $_FILES["image"]["tmp_name"];
       $file_size = $_FILES["image"]["size"];
       $ext = explode(".",$file_name);
       $file_ext = strtolower(end($ext));

       $arr_ext = array("jpg","png");
       if(!in_array($file_ext,$arr_ext)){
           echo "file không đúng định dạng";
       }
       if($file_size>2000000){
           echo "file quá lớn không thể update";
           exit;
       }
       move_uploaded_file($tmp_name,"anh/".$file_name);
       $url_img = "anh/".$file_name;
   }
?>
<?php 
  if($url_img){
      ?>
      <img src="<?php echo $url_img; ?>">
      <?php
  }
  ?>