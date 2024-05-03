<?php
class Food extends Products
{
  public $weight;
  public $expiration_date;

  public function __construct(string $name, float $price, string $img, string $category, string $weight, string $expiration_date)
  {
    parent::__construct($name, $price, $img, $category);
    $this->weight = $weight;
    $this->expiration_date = $expiration_date;
  }
  public function getWeight()
  {
    return $this->weight;
  }
  public function getExpirationDate()
  {
    return $this->expiration_date;
  }
}
