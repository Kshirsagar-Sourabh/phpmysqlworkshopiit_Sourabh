<?php
include './partial/_dbcon.php';
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true ){
  header('location: login.php');
  exit;
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

    <title>Result</title>
  </head>
  <body>
    <?php require './partial/_nav.php'?>
    <h1>Result</h1>
    <?php
    $username=$_SESSION['username'];
    $sql="SELECT * FROM users where id='$username'";
    $result=mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    // echo $num.mysqli_fetch_assoc($result);
    if($num==1){
    while($row=mysqli_fetch_assoc($result)){
    if($row['total marks']==500){
    echo"<br>
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
    $_SESSION['name']=$row['name'];
    if($row['percentage']>=35 &&$row['sub1']>=35
    && $row['sub2']>=35
    && $row['sub3']>=35
    && $row['sub4']>=35
    && $row['sub5']>=35){
      echo "--------------------------------------------<b>Congratulations!</b>--------------------------------------------<br>";
    }
    else{
      echo"----------------------------------------------------------------------------------------<b>Failed!</b>----------------------------------------------------------------------------------------";
    }
  }
  }
  }
  
  if(isset($_POST['to'])&&isset($_POST['subj']))
  { $to =$_POST['to'] ;
    $subject = $_POST['subj'];
    
    $username=$_SESSION['username'];
    $sql="SELECT * FROM users where id='$username'";
    $result=mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    // echo $num.mysqli_fetch_assoc($result);
    if($num==1){
    while($row=mysqli_fetch_assoc($result)){
    if($row['total marks']==500){
      $rowname=$row['name'];;
      $rowsub1=$row['sub1'];
      $rowsub2=$row['sub2'];
      $rowsub3=$row['sub3'];
      $rowsub4=$row['sub4'];
      $rowsub5=$row['sub5'];
      $rowtotalo=$row['total marks'];
      $rowtotal=$row['total obtained'];
      $rowpercentage=$row['percentage'];



    $txt="Name of Student*: $rowname\r\n";
    $txt.="Marks in Each Subject  \r\n";
    $txt.="Subject 1*: $rowsub1/100\r\n ";
    $txt.="Subject 2*: $rowsub2/100 \r\n";
    $txt.="Subject 3*: $rowsub3/100 \r\n";
    $txt.="Subject 4*: $rowsub4/100 \r\n";
    $txt.="Subject 5*: $rowsub5/100\r\n ";
    $txt.="Total Marks Obtained:$rowtotalo  \r\n";
    $txt.="Total Marks :  $rowtotal \r\n";
    $txt.="Percentage :  $rowpercentage \r\n";
    $_SESSION['name']=$row['name'];
    if($row['percentage']>=35 &&$row['sub1']>=35
    && $row['sub2']>=35
    && $row['sub3']>=35
    && $row['sub4']>=35
    && $row['sub5']>=35){
      $txt.= "------------------ Congratulations! ------------------ ";
    }
    else{
      $txt.="------------------ Failed! ------------------";
    }
  }
  }
  }




    // $headers = "From: kshirsagarsourabh547@gmail.com" . "\r\n" .
    // "CC: shubhamsv01@gmail.com";
    ini_set("SMTP","ssl://smtp.gmail.com");
    ini_set("smtp_port","587");
    // $succ=;
    if(mail($to,$subject,$txt)){
      echo"<br>Mail Sent successfully to $to <br>";
    }
    else{
      echo"<br>Mail not Sent to $to <br>";
    }
  }
?>

<form action="welcome.php" method="POST"> 
        <label for="to">To*:</label><br>
        <input type="text" name="to"><br><br>
        <label for="subj">Subject*:</label><br>
        <input type="text" name="subj"><br><br>
        <input type="submit" value="Send">
</form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

