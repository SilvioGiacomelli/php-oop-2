<?php
class Products
{
  public $name;
  public $price;
  public $img;
  public $category;

  public function __construct(string $name, float $price, string $img, string $category)
  {
    $this->name = $name;
    $this->price = $price;
    $this->img = $img;
    $this->category = $category;
  }
}
