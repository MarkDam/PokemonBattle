<?php

class Pokemon
{
  public $name;
  public $type;
  public $hitPoints;
  public $health;
  public $weakness;
  public $resistance;
  private $attacks;

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

  public function pokemonBattle($target, $attack)
  {
    $damage = $this->attacks->attack[$attack][1];
    $atkName = $this->attacks->attack[$attack][0];

    if ($target->weakness->type === $this->type) {
      $damage *= $target->weakness->multiplier;
    }


    if ($target->resistance->type === $this->type) {
      $damage -= $target->resistance->amount;
    }

    $this->pokemonHealth($target, $damage);

    return $damage;

  }

  private function pokemonHealth($target, $damage)
  {
    $target->health -= $damage;
  }

  public function GetAttackName($number)
  {
    return $this->attacks->attack[$number][0];
  }
}
