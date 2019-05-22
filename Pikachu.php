<?php

class Pikachu extends Pokemon
{

  public function __construct($name)
  {
   $this->attacks = new attack([["Electric Ring", 50],["Pika Punch", 20]]);
   $this->weakness = new weakness(Energytype::FIRE, 1.5);
   $this->resistance = new resistance(Energytype::FIGHTNING, 20);
    parent::__construct($name, Energytype::LIGHTING, 60, $this->weakness, $this->resistance, $this->attacks);
  }

}
