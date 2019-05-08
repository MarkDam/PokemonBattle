<?php

class Resistance
{
  public $type;
  public $amount;

  public function __construct($type, $amount)
  {
    $this->type = $type;
    $this->amount = $amount;
  }
}
