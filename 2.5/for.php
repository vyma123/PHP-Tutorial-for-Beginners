<?php
$title = "for loop";

$favoriteGuitars = [
    'Vela',
    'Explorer',
    'Strat'
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>

<body>
    <div>
        <table>
            <?php

            for($i = 0; $i < count($favoriteGuitars); $i++) {
                $guitar = $favoriteGuitars[$i];
                echo " <tr><td>$guitar</td></tr>";

            }


          
            ?>

        </table>

        
    </div>

</body>

</html>