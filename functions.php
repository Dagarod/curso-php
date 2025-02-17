<?php
// sirve para chequear los tipos de datos
// se activa a nivel de archivo y no de proyecto genérico
declare(strict_types=1);

const API_URL = "https://whenisthenextmcufilm.com/api";

function get_data($url): array
{
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
}

function get_until_message(int $days): string
{
    return match (true) {
        $days === 0 => "Hoy se estrena! 🥳",
        $days === 1 => "Mañana se estrena 🚀",
        $days < 7   => "Sólo queda una semana 🫣",
        $days < 30  => "este mes se estrena 💛",
        default     => "$days hasta el estreno 📆",
    };
}

