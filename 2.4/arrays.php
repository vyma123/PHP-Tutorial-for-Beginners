<?php 

$guitars1 = ['Vela', 'Explorer', 'Strat'];

// print_r($guitars1);

// if(isset($guitars1[3])){
//     echo $guitars1[3];
// }else {
//     echo 'Guitar does not exist';
// }

$guitars2 = [
    'prs' => 'Vela',
    'gibson' => 'Explorer',
    'fender' => 'Strat',
    'Prs' => 'Single Cut'
];

// echo $guitars2['prs'];


if(isset($guitars2['Prs'])){
    echo $guitars2['Prs'];
}else {
    echo 'Guitar does not exist';
}
?>