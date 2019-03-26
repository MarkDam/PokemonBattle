<?php

require 'Pokemon.php';
require 'Pickachu.php';
require 'Charmeleon.php';

require 'Energytype.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';


$charmeleon = new Charmeleon('charmeel');

$pickachu = new Pickachu('ashs pickachu');

// $charmeleon->attackPokemon($pickachu, $charmeleon->attacks[0]);

print_r($pickachu);
echo "<br>";
print_r($charmeleon);
