<?php
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true ){
  $logedin=true;
  
}
else{
  $logedin=false;
}
if(isset($_SESSION['username'])){
  $pass=md5('admin@123');
  if($_SESSION['username']=='Admin' && $_SESSION['password']=='admin@123')
  $admin=true;


else{
  $admin=false;
}
}
else{
  $admin=false;
}
  echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Pillai College</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">';
      if($admin){
        echo'<li class="nav-item active">
          <a class="nav-link" href="/login system/welcomea.php">Home <span class="sr-only">(current)</span></a>
        </li>';
      }
      if(!$admin)
        {echo '<li class="nav-item active">
          <a class="nav-link" href="/login system/welcome.php">Home <span class="sr-only">(current)</span></a>
        </li>';
      }
      if($logedin){
        echo '<li class="nav-item">
          <a class="nav-link" href="/login system/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login system/index.php">SignUp</a>
        </li>';
      }
        if(!$logedin){
          echo '<li class="nav-item">
          <a class="nav-link" href="/login system/logout.php">Logout</a>
        </li>';
      }
      echo'</ul>
      <form class="form-inline my-2 my-lg-0">
      </form>
    </div>
  </nav>';
?>