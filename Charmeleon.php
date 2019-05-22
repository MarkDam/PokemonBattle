<?php

class Charmeleon extends Pokemon
{

  public function __construct($name)
  {
   $this->attacks = new attack([["Flare", 30],["Headbutt", 10]]);
   $this->weakness = new weakness(Energytype::WATER, 2);
   $this->resistance = new resistance(Energytype::LIGHTING, 10);
    parent::__construct($name, Energytype::FIRE, 60, $this->weakness, $this->resistance, $this->attacks);
  }

}
