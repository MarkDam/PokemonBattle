<?php

class Attack
{
  public $name;
  public $strenght;

  public function __construct($name, $strenght)
  {
    $this->name = $name;
    $this->strenght = $strenght;
  }
}
