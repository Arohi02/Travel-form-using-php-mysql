<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
	<div class="container">
        This is my first website
        <?php
        define ("pi",3.14);

        // dynamic language meaning no need to speficy data types
        // not case sensitive
        echo"hello ji";
        echo "<br>";

        $variable1= 34;
        $variable2=45;
        echo $variable1;
        echo "<br>";
        echo $variable2;

        echo $variable1 + $variable2;

        echo "the value of var1 plus var 2 is ";
        echo "<br>";
        echo $variable1 + $variable2;

        $newvar = $variable1;
        $newvar+=1;

        echo " the new variable is ";
        echo $newvar;
        echo "<br>";

        // heding can also added in php as echo "<h1>yes</h1>

        echo "the value of 1==4 is ";
        echo var_dump (1==4);

        echo "<br>";
        $myvar = (true) and (true );
        echo var_dump($myvar);

        ?>

        <?php
        // can be used w define 

echo pi;

         ?>




    </div>
  </body>
</html>