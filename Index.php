<?php

require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';

require 'Energytype.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';


$charmeleon = new Charmeleon('Charmeel');

$pikachu = new Pikachu("Ash's pikachu");

// $charmeleon->attackPokemon($pickachu, $charmeleon->attacks[0]);

print_r($pikachu);
echo "<br>";
print_r($charmeleon);
echo "<br>";
echo "<br>";
echo "<br>";
echo "Ash's pikachu valt Charmeel aan met " . $pikachu->Attack->name . " <br>";
echo "Charmeel neemt ". $pikachu->pokemonBattle($charmeleon, 0)  ." damage <br>";
echo "Charmeel heeft xx health over <br>";
echo "Charmeel valt Ash's pikachu aan met " . $charmeleon->Attack->name . " <br>";
echo "Ash's pikachu neemt ". $charmeleon->pokemonBattle($pikachu, 0) . "damage <br>";
echo "Ash's pikachu heeft xx health over <br>";
