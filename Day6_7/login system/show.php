<?php
include './partial/_dbcon.php';
session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];
$passwords=md5($password);
 $sql="SELECT * FROM `users10`.`admins` where username='$username' and `password`='$passwords'";
 $result=mysqli_query($con,$sql);
 $num = mysqli_num_rows($result);

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true || $num==0){
  header('location: loginadmin.php');
  exit;
}

?>
<?php

include './partial/_dbcon.php';
require './partial/_nav.php';

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
    $sql="SELECT * FROM `users10`.`users` where id='$id'";
    $result=mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
          // echo $num.mysqli_fetch_assoc($result);
    if($num==1){
      $query=mysqli_query($con,"UPDATE `users10`.`users` SET `name`='$name',sub1=$s1,sub2=$s2,sub3=$s3,sub4=$s4,sub5=$s5,'total obtained'=sub1+sub2+sub3+sub4+sub5,'percentage'='total obtained'/5 where id=$id;");
    //   $extract=mysqli_query($con,"SELECT * FROM `users10`.`users`;");
    }


   }



if(isset($_POST['id'])){
    $id=$_POST['id'];

$sql=mysqli_query($con,"SELECT * FROM users where id='$id'");
$num = mysqli_num_rows($sql);
if($num==1){
    while($row=mysqli_fetch_assoc($sql)){
        if($row['total marks']==500){
        echo"<br><br><br>
        <b>Name of Student*:</b>".$row['name']."<br><br>
        <b>Marks in Each Subject </b> <br><br>
        <b>Subject 1*:</b>".$row['sub1']."/100<br><br>
        <b>Subject 2*:</b>".$row['sub2']."/100<br><br>
        <b>Subject 3*:</b>".$row['sub3']."/100<br><br>
        <b>Subject 4*:</b>".$row['sub4']."/100<br><br>
        <b>Subject 5*:</b>".$row['sub5']."/100<br><br>
        <b>Total Marks Obtained:".$row['total obtained']."</b><br><br>
        <b>Total Marks : </b>".$row['total marks']."<br><br>
        <b>Percentage : </b>".$row['percentage']."<br><br><br>";
    }
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <h2>Update/Add Details for above id</h2>
    <form action = 'update.php' method='POST' >
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
            
            <input type="submit" value="Update">
        </form>
</body>
</html>
