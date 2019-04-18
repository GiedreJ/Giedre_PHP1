<?php 

$distance = rand(500, 2000);
$consumption = 7.5;
$price_l = 1.3;
$my_money = 100;


$fuel_total = round($distance * $consumption / 100);
$price_trip = round($fuel_total * $price_l);
if ($my_money >= $price_trip) {
    $isvada = 'galiu';
} else { 
     $isvada = 'negaliu'; 
    
}

$text = 'Išvada:' . ' ' . 'aš sau tai' . ' ' . $isvada . ' ' . 'leisti'; 
       
?>


<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <style></style>
    </head>
    <body>
       <?php print $text ?>
    </body>
</html>