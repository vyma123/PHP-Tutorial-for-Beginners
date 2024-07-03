<?php
$title = 'includes';

include('./../inc/header.php');
require_once('./../inc/functions.php');






$guitars = [
    ['name' => 'Vela', 'manufacturer' => 'PRS'],
    ['name' => 'Explorer', 'manufacturer' => 'Gibson'],
    ['name' => 'Strat', 'manufacturer' => 'Fender']
];

$guitar_name = pluck($guitars, 'name');

$guitar_names = pluck($guitars, 'name');


?>


    <div>
        <?php
        output($guitar_names);
        ?>
    </div>

<?php
include('./../inc/footer.php');

 ?>