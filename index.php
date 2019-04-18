<?php 

$a = 6;
$b = 10;
$c = 51;
$d = 12;
$e = 3;
$f = 0;

$suma = $c + $d;
$atimtis = $f - $e;
$dalyba = $d / $e;
$daugyba = $c * $d * $f;

$kvadratu = $e ** $e;
$pliusVienas = ++$f;

$skaicius3 = 10;
$skaicius4 = 20;
$skaicius3 %= $skaicius4;
    
?>


<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <style></style>
    </head>
    <body>
       <?php 
       print $suma . '<br>';
       print $atimtis . '<br>';
       print $dalyba . '<br>';
       print $daugyba . '<br>';
       print $kvadratu . '<br>';
       print $pliusVienas . '<br>';
       print $skaicius3 . '<br>';
       ?>
    </body>
</html>