<?php 

$time=date('s');
$timer=$time % 60;
$explo=$timer<1;

$plius=date('s') + 50;

$img_height=$plius + 150 . 'px;';
$img_width=$plius + 150 . 'px;'
    
?>


<!DOCTYPE html>

<html>
    <head>
        <title>Bomba</title>
        <meta charset="UTF-8">
        <style type="text/css">
            .imgboom {
                background-image: url(/IMG/bomb.png);
                background-size: cover;
                height: <?php print $img_height; ?>
                width: <?php print $img_width; ?>
            }
            .imgboom-1 {
                background-image: url(/IMG/boom.png);
                background-size: cover;
                height: 150px;
                width: 150px;
            }
        </style>
    </head>
    <body>
        <div class="imgboom imgboom-<?php print $explo; ?>">
        </div>
        
	<?php
        print $time. '<br>';
        print $timer. '<br>';
        print $explo. '<br>';
        ?>
    </body>
</html>