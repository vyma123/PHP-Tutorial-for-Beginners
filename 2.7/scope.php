<?php
$title = 'functions';

$guitars = [
    ['name' => 'Vela', 'manufacturer' => 'PRS'],
    ['name' => 'Explorer', 'manufacturer' => 'Gibson'],
    ['name' => 'Strat', 'manufacturer' => 'Fender']
];

// $guitar_name = array_column($guitars, 'name');

function pluck($arr, $key) {
    $result = array_map(function($item) use($key) {
        return $item[$key];
    },$arr);
    return $result;
}

function return_name($item) {
    return $item['manufacturer'];
}

$guitar_names = pluck($guitars, 'name');

// $greeting = 'hello, world';

// function sum($a, $b)
// {
//     global $greeting;
//     echo $greeting;
//     $result = $a + $b;
//     return $result;
// };



// $result = sum(1, 2);

function output($value )
{
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
        output($guitar_names);
        ?>
    </div>

</body>

</html>