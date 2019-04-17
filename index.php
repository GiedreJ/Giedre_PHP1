<?php

    $skola = rand(1,5);
    $_2metai = rand(8,9);
    $_1metai = rand(6,7);
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Skolos skaičiuoklė</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="body1">
            <h1>Skolos skaičiuoklė</h1>
            <h3>Jei paėmei <?php print $skola;?> Eur</h3>
            <h3>Už 1 metų grąžinsi <?php print $_1metai?></h3>
            <h3>Už 2 metų grąžinsi <?php print $_2metai;?></h3>    
        </div>
    </body>
</html>



