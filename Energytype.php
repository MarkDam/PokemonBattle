<?php

class Energytype
{
  const LIGHTING = 'Lightning';
  const FIRE = 'Fire';
  const FIGHTNING = 'Fightning';
  const WATER = 'Water';

  public $type;

  public function __construct($type)
  {
    $this->type = $type;
  }
}
