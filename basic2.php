<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic part 2 </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: rgb(228, 195, 195);
        margin:auto;
    }
  </style>
  <body>
    <div class ="container">
        <h1>Lets learn about php</h1>
    Starting off
    <?php
    echo "<br>";
    $lang= array("python","c++","java","php");
    echo $lang[1];


    $a=0;
    while ($a <= 10) {
        echo "<br>";
        echo "the value of a wile loop of a is";
        echo $a;
        $a++;
    }

    $a=0;
    while ($a < count($lang)) {
        echo "<br>";
        echo "the value of lang is :";
        echo $lang[$a];
        $a++;
    }


    $a=0;
    do  {
        echo "<br>";
        echo "the value of a using do loop is :";
        echo  $a;
        $a++;
    } while ($a <5 );


    
    for ($a=202; $a < 205 ; $a++) { 
        echo "<br>";
        echo "the value of a using for loop is :";
        echo  $a;
    }


    foreach($lang as $value){
        echo "<br> the value using for each loop is ";
        echo $value;
    }



?>

<?php
 function five(){
    echo "five";
 }
 five();

 echo "<br>";

 function print_num($number){
    echo "your number is ";
    echo $number;
 }
 print_num(45);



?>
    </div>
    
    
	<script src="index.js"></script>
  </body>
</html>