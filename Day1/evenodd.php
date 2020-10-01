<?php 
$evenoddevenodd=array(11,23,72,44);
foreach($evenoddevenodd as $ch){
    if($ch%2==0){
        echo"The number ".$ch." is an even number <br>";
    }
    else{
        echo"The number ".$ch." is an odd number <br>";
    }
}
?>