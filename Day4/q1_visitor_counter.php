<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Visitor Counter</title>
</head>
<body>
    
</body>
</html>

<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="simplecounter";

    $con=mysqli_connect($server,$username,$password,$database);

    if(!$con){
        die("connection to this database failed due to ".mysqli_connect_error());

    }
    $counts=mysqli_query($con,"SELECT * FROM `simplecounter`.`user_count`;");
    while($row=mysqli_fetch_assoc($counts)){
        $new_count=$row['counts']+1;
        mysqli_query($con,"UPDATE `simplecounter`.`user_count` SET counts=$new_count;");

    }
?>