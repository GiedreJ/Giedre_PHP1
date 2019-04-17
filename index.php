
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body style="background-color: rgb(<?php print rand(000, 255) . ', ' . rand(000, 255) . ', ' . rand(000, 255);?>)">
        <h1 style="font-size: <?php print rand(12, 140);?>px">
            Aš keičiu savo dydį!
        </h1>
        <p style="color: rgb(<?php print rand(000, 255) . ', ' . rand(000, 255) . ', ' . rand(000, 255);?>)">
            Aš keičiu savo spalvą!
        </p>
        <img src="IMG/<?php print rand(1, 6); ?>.png">
        
        <div>
            <img src="IMG/bomb.png" style="width:<?php print rand(10, 30);?>%">
        </div>
        <div>
            <?php print date('s');?>
        </div>
        <p>
            testas
        </p>
        
        
        
    </body>
</html>



