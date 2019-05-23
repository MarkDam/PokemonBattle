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

  public function pokemonBattle($target, $attack)
  {
  //  return var_dump($target);
    $damage = $this->attacks->attack[$attack][1];
    $atkName = $this->attacks->attack[$attack][0];

    if ($target->weakness->type === $this->type) {
      $damage *= $target->weakness->multiplier;
    }


    if ($target->resistance->type === $this->type) {
      $damage -= $target->resistance->amount;
    }

    $this->pokemonHealth($target, $damage);

    $this->__toString();

    return $damage;

  }

  private function pokemonHealth($target, $damage)
  {
    $target->health -= $damage;
  }

  public function __toString()
  {
    return $this->atkName;
  }
}
