<?php

//require_once 'sections/consts.php';
require_once 'templates/consts.php';
//sólo hace la llamada al archivo una vez
//me aseguro de que no lo llamo más veces
//Puede ser así,pero es mejor require
//include_once 'functions.php';
require_once 'functions.php';

$data = get_data(API_URL);
$until_message = get_until_message($data["days_until"]);

?>
<?php render_template('head', $data); ?>
<?php render_template('main', array_merge(
    $data,
    ["until_message" => $until_message]
)); ?>
<?php render_template('styles'); ?>
