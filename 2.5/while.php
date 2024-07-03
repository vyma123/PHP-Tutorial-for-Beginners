<?php
$title = "while loop";

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

            $i = 0;
            while ($i < count($favoriteGuitars)) {
                $guitar = $favoriteGuitars[$i];
                echo " <tr><td>$guitar</td></tr>";
                $i++;

            }
            ?>

        </table>


    </div>

</body>

</html>