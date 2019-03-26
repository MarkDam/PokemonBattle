<?php

class Pickachu extends Pokemon
{

  public function __construct($name)
  {
    $attacks = [
      new Attack("Electric Ring", 50),
      new Attack("Pika Punch", 20)
   ];
    parent::__construct($name, Energytype::LIGHTING, 60, Energytype::FIRE, Energytype::FIGHTNING, $attacks);
  }

}

//    $this->name = $name;
//    $this->Energytype = 'Lightning';
//    $this->hitPoints = 60;                   alles hier doet ie in de parrent::__construct
