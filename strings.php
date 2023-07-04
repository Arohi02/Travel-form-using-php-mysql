<?php
$str= "this";
echo $str;
$len =strlen($str);
echo "the lenth of the string is " .$len ."thank you";
echo "<br>";
echo "the lenth of the string is " . str_word_count($str);
echo "<br>";
echo "the lenth of the string is " . strrev($str);
echo "<br>";
echo "the lenth of the string is " . strpos($str, "is");
echo "<br>";
echo "the lenth of the string is " . str_replace("is", "at",$str);
?>