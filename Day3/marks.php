
<!DOCTYPE html>
<html>
    <body>
        <form action = 'marks.php' method='POST' >
            <label for="name">Name of Student*:</label><br>
            <input type="text" name="name"><br><br>
            <label for="id">ID of Student*:</label><br>
            <input type="text" name="id"><br><br>
            
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
        $server="localhost";
        $username="root";
        $password="";
        $database="result";
    
        $con=mysqli_connect($server,$username,$password,$database);
    
        if(!$con){
            die("connection to this database failed due to ".mysqli_connect_error());
    
        }
    if(isset($_POST['name'])&& isset($_POST['s1']) && isset($_POST['s2']) && isset($_POST['s3']) && isset($_POST['s4'])&& isset($_POST['s5']) ){
    $name=$_POST['name'];
    $s1 = $_POST['s1'];
    $s2 = $_POST['s2'];
    $s3 = $_POST['s3'];
    $s4 = $_POST['s4'];
    $s5 = $_POST['s5'];
    $id = $_POST['id'];
    $sum=($s1+$s2+$s3+$s4+$s5);
    $percent=($s1+$s2+$s3+$s4+$s5)/5;
    $query=mysqli_query($con,"INSERT INTO `result`.`class1` (`id`, `name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `total obtained`, `total marks`, `percentage`) VALUES ('$id', '$name', '$s1', '$s2', '$s3',' $s4', '$s5',' $sum', '500', '$percent');");
        $extract=mysqli_query($con,"SELECT * FROM `result`.`class1`;");
    while($row=mysqli_fetch_assoc($extract)){
    echo"---------------------------------------------------------------------------------------------------------<br><br><br>
    <b>Name of Student*:</b>".$row['name']."<br><br>
    <b>Marks in Each Subject </b> <br><br>
    <b>Subject 1*:</b>".$row['sub1']."/100<br><br>
    <b>Subject 2*:</b>".$row['sub2']."/100<br><br>
    <b>Subject 3*:</b>".$row['sub3']."/100<br><br>
    <b>Subject 4*:</b>".$row['sub4']."/100<br><br>
    <b>Subject 5*:</b>".$row['sub5']."/100<br><br>
    <b>Total Marks Obtained:".$row['total obtained']."</b><br><br>
    <b>Total Marks : </b>".$row['total marks']."/500<br><br>
    <b>Percentage : </b>".$row['percentage']."<br><br><br>";
    }

   }


?>
