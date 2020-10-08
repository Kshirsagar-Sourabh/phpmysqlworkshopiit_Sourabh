


<?php
$login=false;
$showerror=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include './partial/_dbcon.php';

    $username=$_POST['username'];
    $password=$_POST['password1'];
    // echo $username.$password;
    // and password='$password'"
        $sql="SELECT * FROM `users10`.`admins` where username='$username'";
        $result=mysqli_query($con,$sql);
        $num = mysqli_num_rows($result);
        // echo $num.mysqli_fetch_assoc($result);
        if($num==1){
            while($row=mysqli_fetch_assoc($result)){ //$row will give the row from database
                if(md5($password)==$row['password']){
                    $login=true;
                    session_start();
                    $_SESSION['loggedin']=true;
                    $_SESSION['username']=$username;
                    $_SESSION['password']=$password;
                    header("location: welcomea.php");
            }
            else{
                $showerror=true;
            }

        }
    }
    else{
        $showerror=true;
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

    <title>Admin Login Page</title>
  </head>
  <!-- <link rel="stylesheet" href="./css/login.css"> -->
  <body>
    <?php require './partial/_nav.php'?>
<?php
//     if($login){
//     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//     <strong>Success!</strong> You have successfully logged in.
//     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//         <span aria-hidden="true">&times;</span>
//     </button>
//     </div>';
// }
    if($showerror){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Failed!</strong> Invalid credentials.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>';
}
?>
    <section id="home">
    <div class="container" >
        <h1 >Login to the Website</h1>
        <form action="./loginadmin.php" method="post" >
        <div class="form-group col-md-6">
            <label for="username" style="font-size: 1.5rem; font: bold;">Username</label>
            <input type="text" maxlength="15" class="form-control" id="username" name="username" aria-describedby="emailHelp">
        </div>

    <!-- ANYTHING U CAN ADD EXTRA HERE LIKE PHONE NO., OR ANY OTHER DETAILS OF USER -->
        <div class="form-group col-md-6">
            <label for="exampleInputPassword1" style="font-size: 1.5rem; font: bold;">Password</label>
            <input type="password" class="form-control" id="password1" name="password1">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
        <a href="./login.php">  Student Login  </a>
        </form>
    </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>