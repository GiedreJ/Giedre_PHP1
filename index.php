<?php 

$oras = rand(0, 1);

if ($oras) {
    $css_class = "sauleta";
    $tekstas = "Saulėta";
}   else {
    $css_class = "debesuota";
    $tekstas = "Debesuota";
}

?>


<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <style type="text/css">
            .sauleta {
                background-image: url(IMG/sunny.png);
                width: 150px;
                height: 150px;
                background-size: cover;
            }
            .debesuota {
                background-image: url(IMG/cloudy.png);
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