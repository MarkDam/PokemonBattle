<?php

class Charmeleon extends Pokemon
{

  public function __construct($name)
  {
    $attacks = [
      new Attack("flare", 30),
      new Attack("headbutt", 10)
   ];
    parent::__construct($name, Energytype::FIRE, 60, Energytype::WATER, Energytype::LIGHTING, $attacks);
  }

}


/*
  $attacks = [
    new Attack("flare", 30),
    new Attack("bitchslap", 5)
 ];
 */


//    $this->name = $name;
//    $this->Energytype = 'Lightning';
//    $this->hitPoints = 60;                   alles hier doet ie in de parrent::__construct
