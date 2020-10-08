<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include './partial/_dbcon.php';
    $username = $_POST["username"];
    $password = $_POST["password1"];
    $cpassword = $_POST["cpassword1"];
    $name=$_POST['name'];    // $exists=false;

    // Check whether this username exists
    $existSql = "SELECT * FROM `users10`.`usersp` WHERE id = '$username'";
    $result = mysqli_query($con, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "Username Already Exists";
    }
    else{
        // $exists = false; 
        if(($password == $cpassword)){
            $password_hash=md5($password);
            $sql = "INSERT INTO `users10`.`usersp` ( `id`, `password`,`name`) VALUES ('$username', '$password_hash','$name');";
            $result = mysqli_query($con, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
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

    <title>SignUp Page</title>
  </head>
  <body>
    <?php require './partial/_nav.php'?>
<?php
    if($showAlert){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You have successfully created an account.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>';
}
    if($showError){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Failed!</strong> '.$showError.'
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>';
}
?>
    <div class="container" >
        <h1 class="text-center">Sign Up to the Website</h1>
        <form action="/login system/index.php" method="post" >
        <div class="form-group col-md-6">
            <label for="username">Username</label>
            <input type="text" maxlength="15" class="form-control" id="username" name="username" aria-describedby="emailHelp">
        </div>
        <div class="form-group col-md-6">
            <label for="username">Name Of Student</label>
            <input type="text" maxlength="35" class="form-control" name="name" aria-describedby="emailHelp">
        </div>

    <!-- ANYTHING U CAN ADD EXTRA HERE LIKE PHONE NO., OR ANY OTHER DETAILS OF USER -->
        <div class="form-group col-md-6">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password1" name="password1">
        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword1" name="cpassword1">
            <small id="emailHelp" class="form-text text-muted">*Type Same Password</small>
        </div>

        <button type="submit" class="btn btn-primary">SignUp</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>