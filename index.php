<?php 

$sunny = rand(0, 1);
$rainy = rand (0, 1);

if ($sunny && $rainy) {
    $css_class = 'fas fa-rainbow';
    $tekstas = "Vaivorykštė";
}   elseif ($sunny XOR $rainy) {
        if ($sunny) {
        $css_class = 'fas fa-sun';
        $tekstas = "Saulėta";
      } elseif ($rainy) {
        $css_class = 'fas fa-cloud-rain';
        $tekstas = "Lietus";
      }
}   else {
    $css_class = 'fas fa-cloud';
    $tekstas = "Debesuota";
} 

?>


<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <style></style>
    </head>
    <body>
        <div class ="container">
            <div class="<?php print $css_class;?>">
            </div>
            <h1><?php print $tekstas ?></h1>
        </div>       
    </body>
</html>