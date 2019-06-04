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

echo "Ash's pikachu valt Charmeel aan met " . $pikachu->attacks->attack[0][0] . ". <br>";
echo "Charmeel neemt ". $pikachu->pokemonBattle($charmeleon, 0)  ." damage. <br>";
echo "Charmeel heeft " . $charmeleon->health . " health over. <br>";
echo "Charmeel valt Ash's pikachu aan met " . $charmeleon->attacks->attack[0][0] . ". <br>";
echo "Ash's pikachu neemt ". $charmeleon->pokemonBattle($pikachu, 0) . " damage. <br>";
echo "Ash's pikachu heeft " . $pikachu->health . " health over. <br>";
