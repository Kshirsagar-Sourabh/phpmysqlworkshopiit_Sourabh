<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<body>
<form action="q2_mail.php" method="POST"> 
        <label for="to">To*:</label><br>
        <input type="text" name="to"><br><br>
        <label for="subj">Subject*:</label><br>
        <input type="text" name="subj"><br><br>
        <label for="feed">Feedback*:</label><br>
        <textarea rows="10" cols="30" name="feed"> </textarea><br><br>
        <input type="submit" value="Send">
</form>
</body>
</html>
<?php
if(isset($_POST['to']) && isset($_POST['subj']) && isset($_POST['feed']) ){
    $to =$_POST['to'] ;
    $subject = $_POST['subj'];
    $txt=$_POST['feed'];
    // $headers = "From: kshirsagarsourabh547@gmail.com" . "\r\n" ."CC: shubhamsv01@gmail.com";
    ini_set("SMTP","ssl://smtp.gmail.com");
    ini_set("smtp_port","587");
    // $succ=;

    if(mail('kshirsagarsourabh5478@gmail.com',$subject,$txt)){
      echo"<br>Mail Sent successfully to $to <br>";
      $sub="Thanks for your valuable time and letting is uknow about our services";
      mail($to,'Thanking For Feedback',$sub);
    }
    else{
      echo"<br>Mail not Sent to $to <br>";
    }

}

?>