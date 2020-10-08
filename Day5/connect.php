<?php

    $server="localhost";
    $username="root";
    $password="";
    $database="usp";

    $con=mysqli_connect($server,$username,$password,$database);

    if(!$con){
        die("connection to this database failed due to ".mysqli_connect_error());

    }

?>