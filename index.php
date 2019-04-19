<?php 

if (date('s') % 2 == 0) {
    $timer = date('s');
    $class = 'kvadratas';
}   else {
    $timer = date('s');
    $class = 'apskritimas';
}
?>


<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <style>
            .kvadratas {
                width: 400px;
                height: 400px;
                background-color: red;
            }
            .apskritimas {
                background-color: green;
                width: 400px;
                height: 400px;
                border-radius: 50%;           
            }
            .flex {
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                align-content: center;
            }
            .container {
                height: 50%;
            }
        </style>
    </head>
    <body>
        <div class="container flex">
        <div class ="flex <?php print $class ?>">
            <p><?php print $timer; ?></p> 
        </div>
        </div>
    </body>
</html>