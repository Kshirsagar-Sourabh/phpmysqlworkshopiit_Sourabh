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
    // echo "$percent";
    $result=mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
          // echo $num.mysqli_fetch_assoc($result);
    if($num==1){
      $query=mysqli_query($con,"UPDATE users SET `name`='$name',sub1=$s1,sub2=$s2,sub3=$s3,sub4=$s4,sub5=$s5,`total obtained`=sub1+sub2+sub3+sub4+sub5,percentage=`total obtained`/5 where id=$id");
    //   $extract=mysqli_query($con,"SELECT * FROM `users10`.`users`;");
    }


   }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Home Page</h3>
    <form action="welcomea.php">
    <br><input type="submit" value="Home">
    </form>
</body>
</html>