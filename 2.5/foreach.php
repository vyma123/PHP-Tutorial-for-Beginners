<?php
$title = "foreach loop";

$favoriteGuitars = [
    'Vela',
    'Explorer',
    'Strat'
];

$kvpGuitars = [
    'prs' => 'Vela',
    'gibson' => 'Explorer',
    'fender' => 'Strat'
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
            foreach ($favoriteGuitars as $guitar) {
                echo " <tr><td>$guitar</td></tr>";
            }
            ?>

        </table>

        <table>
            <?php
            foreach ($kvpGuitars as $key => $guitar) {
                echo " <tr><td>$key</td><td>$guitar</td></tr>";
            }
            ?>

        </table>

    </div>

</body>

</html>