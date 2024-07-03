<?php
$title = 'functions';

function sum($a, $b) {
    $result = $a + $b;
    return $result;
};



$result = sum(1,2);

function output($value) {
    echo '<pre>';
    print_r($value);
    echo '</pre>';

}

$guitars = [
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
        <?php
        output($guitars);
         ?>
    </div>

</body>

</html>