<?php 

$grizai_velai = rand(0,1);
$grizai_isgeres = rand(0,1);

if ($grizai_velai && $grizai_isgeres) {
    $zinute = 'Miegosi ant sofos, nes grįžai vėlai ir išgėręs';
}   elseif ($grizai_velai XOR $grizai_isgeres) {
    if ($grizai_velai) {
   $zinute = 'Nemiegosi ant sofos, nes negrįžai išgėręs';
    } if ($grizai_isgeres) {
   $zinute = 'Nemiegosi ant sofos, nes negrįžai vėlai';
    }
}   else {
   $zinute = 'Nemiegosi ant sofos, nes nieko nepadarei';
}

?>


<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <style></style>
    </head>
    <body>
       <?php print $zinute ?>
    </body>
</html>