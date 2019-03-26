<?php

class Weakness
{
  public $multiplier;
  public $type;

  public function __construct($multiplier, $type)
  {
    $this->multiplier = $multiplier;
    $this->type = $type;
  }
}
