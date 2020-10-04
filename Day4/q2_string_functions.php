<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Functions</title>
</head>
<body>
    <form action="q2_string_functions.php" method="POST">
    <label for="stg">Enter the String *:</label><br>
    <input type="text" name="stg"><br>
    <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['stg']) ){
    $string=$_POST['stg'];
    $count=count_chars($string,3);
    echo"<br><br>1.Number of Characters in String :".strlen($count);
    
    echo"<br><br>2.Breaking down a string into an array :";
    print_r (explode(" ",$string));
    
    echo"<br><br>3.Reverse the string :".strrev($string);

    echo"<br><br>4.Convert all alphabetic characters in string to their lower case form :".strtolower($string);

    echo"<br><br>5.Convert all alphabetic characters in string to their upper case form :".strtoupper($string);
    $rep="Hey I am using PHP";

    echo "<br><br>6.Declare a substring and replace the content of substring into original string :".str_replace($string,$rep,$string);

}

?>