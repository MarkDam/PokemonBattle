<?php

class Charmeleon extends Pokemon
{
  public $attacks;

  public function __construct($name)
  {
    $attacks = [
      new Attack("Flare", 30),
      new Attack("Headbutt", 10)
   ];
   $this->weakness = new weakness(Energytype::WATER, 2);
   $this->resistance = new resistance(Energytype::LIGHTING, 10);
    parent::__construct($name, Energytype::FIRE, 60, $this->weakness, $this->resistance, $attacks);
  }

  public function getAttack($key) {
    return $this->attacks[$key];
  }
}

//    $this->name = $name;
//    $this->Energytype = 'Lightning';
//    $this->hitPoints = 60;                   alles hier doet ie in de parrent::__construct
