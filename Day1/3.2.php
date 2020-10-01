<?php
$mat1=array(
    array(91,72),
    array(32,21)
);
$mat2=array(
    array(54,43),
    array(-38,90)
);
echo"Matrix 1<br>";
foreach($mat1 as $m1){
    foreach($m1 as $m){
        echo $m." ";
    }
    echo "<br>";
}
echo"<br><br>Matrix 2<br>";
foreach($mat2 as $m1){
    foreach($m1 as $m){
        echo $m." ";
    }
    echo "<br>";
}
echo"<br><br>Matrix Addition<br>";

for($i=0;$i<2;$i++){
    for($j=0;$j<2;$j++){
        echo $mat1[$i][$j]+$mat2[$i][$j]." ";
    }
    echo "<br>";
}
?>