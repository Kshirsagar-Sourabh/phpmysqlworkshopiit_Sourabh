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
    if($num==0){
      $query=mysqli_query($con,"INSERT INTO `users10`.`users` (`id`, `name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `total obtained`, `total marks`, `percentage`) VALUES ('$id', '$name', '$s1', '$s2', '$s3',' $s4', '$s5',' $sum', '500', '$percent');");
      $extract=mysqli_query($con,"SELECT * FROM `users10`.`users`;");
    }


   }
   if(isset($_POST['idd'])){
    $idd=$_POST['idd'];
    $sql="DELETE FROM `users` WHERE `id`=$idd";
    $result=mysqli_query($con,$sql);
   }


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Welcome - <?php echo $_SESSION['username']?></title>
  </head>
  <body>
    <?php require './partial/_nav.php'?>
    Welcome - <?php echo $_SESSION['username']?>
    

        <form action = 'welcomea.php' method='POST' >
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
    <!-- Optional JavaScript -->
        <br><br><form action="show.php" method="POST">
        <h2>Search By ID Student Result</h2>
        <label for="id">ID of Student*:</label><br>
        <input type="text" name="id"><br><br>
        <input type="submit" value="Search"><br><br>
        </form>
        <br><br><form action="welcomea.php" method="POST">
        <h2>Delete Student By ID:</h2>
        <label for="idd">ID of Student*:</label><br>
        <input type="text" name="idd"><br><br>
        <input type="submit" value="Delete"><br><br>
        </form>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

