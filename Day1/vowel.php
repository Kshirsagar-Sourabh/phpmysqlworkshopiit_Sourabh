<?php
    function isvowel($ch){
        switch($ch){
            case 'A':
            case 'a':
            case 'E':
            case 'e':
            case 'I':
            case 'i':
            case 'O':
            case 'o':
            case 'U':
            case 'u':return TRUE;
                    break;
            default: return FALSE;
            }
        }
    $char=array("s","O","u","r","a","b","h");
    foreach($char as $ch){
    if(isvowel($ch)){
    echo "The character ".$ch." is vowel <br>";
        }
    else{
    echo "The character ".$ch." is consonant <br>";
        }
    }


?>