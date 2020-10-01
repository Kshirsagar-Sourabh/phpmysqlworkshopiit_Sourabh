
<!DOCTYPE html>
<html>
    <body>
        <form action = '6.2.php' method='GET' >
            <label for="name">Name of Student*:</label><br>
            <input type="text" name="name"><br><br>
            
            <label for="s1">Subject 1*:</label><br>
            <input type="text"  name="s1"><br><br>
            
            <label for="s2">Subject 2*:</label><br>
            <input type="text" name="s2"><br><br>
            
            <label for="s3">Subject 3*:</label><br>
            <input type="text" name="s3"><br><br>
            
            <label for="s4">Subject 4*:</label><br>
            <input type="text" name="s4"><br><br>
            
            <label for="s5">Subject 5*:</label><br>
            <input type="text" name="s5"><br><br>
            
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
<?php
    
    if(isset($_GET['name'])&& isset($_GET['s1']) && isset($_GET['s2']) && isset($_GET['s3']) && isset($_GET['s4'])&& isset($_GET['s5']) ){
    $name=$_GET['name'];
    $s1 = $_GET['s1'];
    $s2 = $_GET['s2'];
    $s3 = $_GET['s3'];
    $s4 = $_GET['s4'];
    $s5 = $_GET['s5'];
    echo"<b>Name of Student*:</b> $name<br><br>
    <b>Marks in Each Subject</b><br><br>
    <b>Subject 1*:</b> $s1/100<br><br>
    <b>Subject 2*:</b> $s2/100<br><br>
    <b>Subject 3*:</b> $s3/100<br><br>
    <b>Subject 4*:</b> $s4/100<br><br>
    <b>Subject 5*:</b> $s5/100<br><br>
    <b>Total Marks Obtained:</b><br><br>
    <b>Total Marks : </b>".($s1+$s2+$s3+$s4+$s5)."/500<br><br>
    <b>Percentage : </b>".(($s1+$s2+$s3+$s4+$s5)/5);
    

   }


?>
