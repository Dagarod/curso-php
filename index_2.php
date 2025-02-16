<?php
/*
 PARA LEVANTAR EL LOCALHOST EN CMD PONEMOS:
 entramos en el directorio donde está el php
 C:\laragon\www\php\ejemplo01\index_2.php
 y ejecutamos el código que levanta el servicio
 php -S localhost:8000
*/

/*
Super importate!!!
para eliminar la posibilidad de que aparezcan los errores
de codigo en la pantalla web hay que configurar el 
display errors y php init
*/

// variables
$name = "Daniel";
$isDev = true;
$age = 48;
$age2 = (bool) 50;
$isOld = true;

//variable global
define('LOGO_URL', 'https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg');


var_dump($name);
var_dump($isDev);
var_dump($age);
var_dump($age2);
echo gettype($name) . "\n";
echo gettype($isDev) . "\n";
echo gettype($age) . "\n";
echo gettype($age2) . "\n";

$output = "Hola output = " . $name . " con " . $age . " si? " . $age2 . " es " . $isDev;
$output2 = "Hola output2 = $name";
$output2 .= " con $age";
$output2 .= " si? $age2";
$output2 .= " es " . $isDev;
$outputAge = $isOld
    ? 'Eres viejo, lo siento'
    : 'Eres joven, felicidades';


// constante local estatica
const NOMBRE = 'Daniel';

//booleano
$isOld = $age > 45;

if ($isOld) {
    echo "<h2>Eres un viejo</h2>";
} else {
    echo "<h2>Eres joven </h2>";
}



$outputAge2 = match (true) {
    $age < 2 => "Eres un bebé, $name 👶",
    $age < 10 => "Eres un niño, $name 👦",
    $age < 18 => "Eres un adolescente, $name 🍺",
    $age === 18 => "Eres mayor de edad, $name 💛",
    $age < 60 => "Eres un adulto joven, $name 🧑",
    $age >= 60 => "Eres un adulto viejo, $name 👴",
    default => "Hueles más a madera que a fruta, $name 😄",
};

//arrays
$bestLanguages = ["PHP", "JavaScript", "Python"];
$bestLanguages[3] = "JAVA";
$bestLanguages[] = "TypeScript";

$person = [
    "name" => "Daniel",
    "age" => 48,
    "isDev" => true,
    "languages" => ["PHP", "JavaScript", "Pythin"],
];
$person["name"] = "pheralb";
$person["languages"][] = "JAVA";

?>
<h3>
    El mejor lenguaje es <?= $bestLanguages[4] ?>
</h3>
<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>

<?php if ($isOld) : ?>
    <h2>Eres un viejo</h2>
<?php elseif ($isDev) : ?>
    <h2>No eres viejo, pero eres dev. Estás jodido</h2>
<?php else : ?>
    <h2>Eres Joven!! </h2>
<?php endif; ?>

<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">
<h1><?= NOMBRE ?></h1>
<h1><?= $output . "</br>", $output2  ?></h1>
<h2><?= $outputAge ?></h2>
<h2><?= $outputAge2 ?></h2>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>