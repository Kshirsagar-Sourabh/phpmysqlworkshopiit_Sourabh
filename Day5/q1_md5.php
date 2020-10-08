<html>
<form action="q1_md5.php" method="POST">
	Username:<input type="text" name="name"><br>
	Password:<input type="text" name="pass"><br>
	<input type="submit">
</form>
</html>
<?php
require("connect.php");
$n="";
if(isset($_POST['name'],$_POST['pass']))
{
	$n=$_POST['name'];
	$p=$_POST['pass'];
	$enc=md5($p);
	if($n && $p)
             {
	$query ="INSERT INTO userp (Name,Pass_Encrypted)VALUES('$n','$enc')";
	$up=mysqli_query($con,$query);
	if($up)
	   {  	echo"<br>"; 
	              echo "Table updated successfully";
	   }
	else
	  {
	          echo "<br/>";
	          echo "Error:".mysqli_error($con);
	  } 
            }
}

?>