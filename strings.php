<?php
    $str = "this is a string";
    echo $str;
    $lenn = strlen($str);
    echo "<br>length of string";
    echo $lenn;
    echo "<br>Example of concatenation:";
    echo "<br> Length of string is : " . $lenn;
    echo "<br> Word count: " . str_word_count($str);
    echo "<br> Reverse string: " . strrev($str);
    echo "<br> Search for string: " . strpos($str, "is");
    echo "<br> Replace string: " . str_replace("is","at",$str);
?>