
<!DOCTYPE html>
<html>
    <body>
        <form action = '6.1.php' method='GET' >
            <label for="s1">length of side 1:</label><br>
            <input type="text"  name="s1"><br><br>
            <label for="s2">length of side 2:</label><br>
            <input type="text" name="s2"><br><br>
            <label for="s3">length of side 3:</label><br>
            <input type="text" name="s3"><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
<?php
    
    if(isset($_GET['s1']) && isset($_GET['s2']) && isset($_GET['s3']) ){
    
    $s1 = $_GET['s1'];
    $s2 = $_GET['s2'];
    $s3 = $_GET['s3'];
  
   if ($s1==$s2 || $s2== $s3 || $s1== $s3){
       echo "<b>Isosceles triangles</b>";
    } elseif ($s1==$s2 && $s1==$s3 && $s2==$s3){
        echo "<b>Equilateral triangles</b>";
   } else {
        echo "<b>Scalene triangle</b>";
    }

   }


?>
