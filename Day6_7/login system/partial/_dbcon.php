<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="users10";

    $con=mysqli_connect($server,$username,$password,$database);

    if(!$con){
        die("connection to this database failed due to ".mysqli_connect_error());

    }
    // echo"Succefully connected to databsae";





?>