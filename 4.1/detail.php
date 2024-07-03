<?php

require('app/app.php');

if(!isset($_GET['term'])) {
    redirect('index.php');
}

$data = get_term($_GET['term']);

if($data == false) {
    view('not_found');
    die();
}

$term = $data->term;
$view_bag = [
    'title' => "Detail for $term",
];


view('detail', $data);
