<?php

$nombre = 'Daniel';

// Hola Mundo
echo "Hola, PHP ".$nombre."\n";

/*
un comentario largo
*/

$my_string = "Esto es un cadena de texto";
echo $my_string . "\n";
$my_string = "Aquí cambio el valor de mi texto \n";
echo $my_string;

echo "Es tipo ".gettype($my_string) . "\n";

$my_int = 6;
echo gettype($my_int) . "\n";

$my_float = 9.5;
echo gettype($my_float) . "\n";

echo $my_int + $my_float . "\n";

$my_bool = true;
echo "true = ".$my_bool . "\n";
echo "my_bool = ".gettype($my_bool) . "\n";

echo "El valor de mi integer es $my_int y el de mi boolean es $my_bool.\n";

// Constantes

const MY_CONSTANT = "Valor de la constante";
echo MY_CONSTANT ."\n";

// LISTAS

$my_array = [$my_string,$my_float];
echo gettype($my_array) . "\n";
echo $my_array[0] . "\n";
echo $my_array[1] . "\n";

array_push($my_array, $my_bool);
print_r($my_array) . "\n";

// Diccionario
// claves, no posiciones
$my_dict = array("string" => $my_string, "int" => $my_int, "bool" => $my_bool);
echo gettype($my_dict) . "\n";

echo gettype($my_dict) . "\n";
print_r($my_dict);
echo $my_dict["int"] . "\n";

// Set
// en PHP no hay set, pero unique permite hacerlo

array_push($my_array, "Dani");
array_push($my_array, "Dani");
print_r($my_array);
print_r(array_unique($my_array));

// Flujos de datos

for ($index = 0; $index <= 10; $index++){
    echo $index . "\n";
}

foreach($my_array as $my_item){
    echo $my_item . "\n";
}

$index = 0;
while ($index <= sizeof($my_array) -1){
    echo $my_array[$index] . "\n";
    $index++;
}

if($my_int == 11 && $my_string == "Hola"){
    echo "El valor es 11\n";
}else if($my_int == 12 || $my_string == "Hola"){
    echo "El valor es 12 y dice HOLA\n";
}else{
    echo "El valor no es 11\n";
}

// Funciones

function print_number(int $my_number){
    echo "1 - 10" . "\n";
    echo "2 - " . $my_number . "\n";
}

print_number(10.5);
print_number(11);
print_number(12);

// Clases

class MyClass {
    public $name;
    public $age;

    function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
}

$my_class = new MyClass("Dani",48);
print_r($my_class);
echo $my_class ->name . "\n";
$my_class->name = "Dagarod";
echo $my_class -> name . "\n";
echo gettype($my_class) . "\n";