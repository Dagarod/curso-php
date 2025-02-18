<?php

//require_once 'sections/consts.php';
require_once 'templates/consts.php';
//sólo hace la llamada al archivo una vez
//me aseguro de que no lo llamo más veces
//Puede ser así,pero es mejor require
//include_once 'functions.php';
require_once 'functions.php';
require_once 'classes/NextMovie.php';

$next_movie = NextMovie::fetch_and_create_movie(API_URL);
$next_movie_data = $next_movie->get_data();

?>
<?php render_template('head', ["title" => $next_movie_data["title"]]); ?>
<?php render_template('main', array_merge(
    $next_movie_data,
    ["until_message" => $next_movie->get_until_message()]
)); ?>
<?php render_template('styles'); ?>
