<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="file" />
         <input type="submit"/>
      </form>
      
   </body>
</html>
<?php
   if(isset($_FILES['file'])){
    $file_name = $_FILES['file']['name'];
    $file_size =$_FILES['file']['size'];
    echo"File Name : ".$file_name;
    echo"<br><br>File Size : ".$file_size;
    }
?>