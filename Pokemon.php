<?php

class Pokemon
{
  public $name;
  public $type;
  public $hitPoints;
  public $health;
  public $weakness;
  public $resistance;
  public $attacks;

  public function __construct($name, $type, $hitPoints, $weakness, $resistance, $attacks)
  {
    $this->name = $name;
    $this->type = $type;
    $this->hitPoints = $hitPoints;
    $this->health = $hitPoints;
    $this->weakness = $weakness;
    $this->resistance = $resistance;
    $this->attacks = $attacks;
  }

/*
  public function attackPokemon($targetPokemon, $attack)
  {
    $targetPokemon->hitPoints - $attack->strenght;
  }

  public function getDamage($damage)
  {
    $this->name;
  }
*/
}
