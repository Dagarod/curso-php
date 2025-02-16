<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

//Inicializar una nuva sesión de cURL; ch = cURL handle
$ch = curl_init(API_URL);

/* 
Indicar que queremos recibir el resultado 
de la peticion y no mostrarlo en pantalla
porque php suele mostrarlo en pantalla
*/
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/* 
Ejecutar la partición
y guardamos el resultado
*/
$result = curl_exec($ch);

// una alternativa sería utilizar file_get_contents
// $result = file_get_content(API_URL); 
// si sólo quieres hace un GET de una API

$data = json_decode($result, true);

curl_close($ch);

//var_dump($data);
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

    <section>
        <h2>La próxima película de Marvel</h2>
        <img src="<?= $data["poster_url"]; ?>" width=" 300" alt="Poster de <?= $data["title"] ?>"
            style="border-radius: 16px" ; />
    </section>
    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h3>
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