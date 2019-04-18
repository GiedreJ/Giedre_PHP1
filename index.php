<!DOCTYPE html>

<html>
    <head>
        <title>Šiukšlės</title>
        <meta charset="UTF-8">
    </head>
    <body>
	<?php 

	$siukslines_turis = 40;
	$siuksliu_turis_avg_per_day = 15;
	$max_kaupo_turis = rand(1,10);
	$dienu = floor(($siukslines_turis + $max_kaupo_turis) / $siuksliu_turis_avg_per_day);
	print $dienu . ' ' . date('Y-m-d', strtotime("+$dienu days"));

	?>
    </body>
</html>