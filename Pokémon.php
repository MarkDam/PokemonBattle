<?php

class Pokémon
{
  public $name;
  public $hitPoints;
  public $health;

  public function __construct($name, $hitPoints, $health)
  {
    $this->name = $name;
    $this->hitPoints = $hitPoints;
    $this->health = $health;
  }

}
