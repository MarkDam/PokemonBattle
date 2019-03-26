<?php

class Resistance
{
  public $amount;
  public $type;

  public function __construct($amount, $type)
  {
    $this->amount = $amount;
    $this->type = $type;
  }
}
