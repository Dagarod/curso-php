<?php

//sólo hace la llamada al archivo una vez
//me aseguro de que no lo llamo más veces
//Puede ser así,pero es mejor require
//include_once 'functions.php';
require_once 'functions.php';

$data = get_data(API_URL);
$untilMessage = get_until_message($data["days_until"]);

?>

<head>
    <meta charset="utf-8" />
    <title>La próxima película de Marvel</title>
    <meta name="description" content="La próxima película de Marvel" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Centered viewport -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>
<main>

    <?php require 'banner.php'; ?>
    <section>
        <h2>La próxima película de Marvel</h2>
        <img src="<?= $data["poster_url"]; ?>" width=" 300" alt="Poster de <?= $data["title"] ?>"
            style="border-radius: 16px" ; />
    </section>
    <?php require 'banner.php'; ?>
    <hgroup>
        <h3><?= $data["title"]; ?> - <?= $untilMessage ?></h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
</main>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
    }

    img {
        margin: 0 auto;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
</style>