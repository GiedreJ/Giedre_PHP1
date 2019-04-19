<?php 

$sunny = rand(0, 1);
$rainy = rand (0, 1);

if ($sunny && $rainy) {
    $css_class = 'rainbow';
    $tekstas = "Vaivorykštė";
}   elseif ($sunny XOR $rainy) {
        if ($sunny) {
        $css_class = 'sunny';
        $tekstas = "Saulėta";
      } elseif ($rainy) {
        $css_class = 'rainy';
        $tekstas = "Lietus";
      }
}   else {
    $css_class = 'cloudy';
    $tekstas = "Debesuota";
} 

?>


<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <style type="text/css">
            .sunny {
                background-image: url(IMG/sunny.png);
                width: 150px;
                height: 150px;
                background-size: cover;
            }
            .cloudy {
                background-image: url(IMG/cloudy.png);
                width: 150px;
                height: 150px;
                background-size: cover;
            }
            .rainbow {
                background-image: url(IMG/rainbow.png);
                width: 150px;
                height: 150px;
                background-size: cover;
            }
            .rainy {
                background-image: url(IMG/rainy.png);
                width: 150px;
                height: 150px;
                background-size: cover;
            }
            
        </style>
    </head>
    <body>
        <div class ="container">
            <div class="<?php print $css_class;?>">
            </div>
            <h1><?php print $tekstas ?></h1>
        </div>       
    </body>
</html>