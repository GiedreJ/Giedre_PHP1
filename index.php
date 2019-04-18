<?php 

$distance = rand(200, 400);
$consumption = 7.5;
$price_l = 1.3;


$fuel_total = round($distance * $consumption / 100);
$price_trip = round($fuel_total * $price_l);
$text = 'Nuvažiavus' . $distance . 'km,' . 'mašina sunaudos' . $fuel_total . 'l. kuro. Kaina:' . $price_trip . 'pinigų.';
       
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