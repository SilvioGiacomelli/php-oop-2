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
  public function getName()
  {
    return $this->name;
  }
  public function getPrice()
  {
    return $this->price;
  }
  public function getImg()
  {
    return $this->img;
  }
  public function getCategory()
  {
    return $this->category;
  }
}
