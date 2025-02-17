<?php

declare(strict_types=1);

class SuperHero
{
    // propiedades y metodos
    // propiedades: datos del objeto
    // visibilidad del cliente sobre el objeto
    // qué pueden ver y pueden actualizar

    //promoted properties -> PHP 8
    public function __construct(
        private string $name,
        public array $powers,
        public string $planet
    ) {
        $this->name = $name;
        $this->powers = $powers;
        $this->planet = $planet;
    }

    public function attack()
    {
        return "¡$this->name ataca con sus poderes!";
    }
    public function description()
    {
        $powers = implode(",", $this->powers);

        return "$this->name es un superhéroe que viene de
        $this->planet y tiene los siguientes poderes: $powers";
    }

    public static function random()
    {
        $names = ["Thor", "Spiderman", "Wolverine", "Ironman", "Hulk"];
        $powers = [
            ["Superfuerza", "Volar", "Martillo"],
            ["Regeneración", "Súper agilidad", "Telarañas"],
            ["Superfuerza", "Rápido", "Uñas largas"],
            ["Superfuerza", "Volar", "Rayos láser"],
            ["Superfuerza", "Correr", "Puñetazos"],
        ];
        $planets = ["Asgard", "Tierra1", "Tierra2", "Tierra3", "Tierra4"];

        $name = $names[array_rand($names)];
        $power = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)];

        //echo "El superhéroe elegido es $name, que viene de $planet y tiene los siguientes poderes: " . implode(",", $power);
        return new self($name, $power, $planet);
    }
}

//método estático - no necesitamos instanciar la clase
$hero = SuperHero::random();
echo $hero->description();

//instanciar
/*$hero = new SuperHero("Superman", ["Superfuerza, super calzones rojos, rayos láser"], "Krypton");
$hero->description();
echo $hero->description();*/
