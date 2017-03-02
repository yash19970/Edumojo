<html>
   <body>
      
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit"/>	
      </form>
      
   </body>
</html>
<?php date_default_timezone_set('Asia/Calcutta'); ?>
<?php require_once("conn.php");?>
<?php session_start(); ?>
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png","docx","txt","mp4","mp3","pdf");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"C:/wamp/www//Edu/img/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>


<!-- <!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="img_nM" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html> -->

