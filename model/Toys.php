

<?php
class Toys extends Products
{
  public $size;
  public $material;

  public function __construct(string $name, float $price, string $img, string $category, string $size, string $material)
  {
    parent::__construct($name, $price, $img, $category);
    $this->size = $size;
    $this->material = $material;
  }
  public function getSize()
  {
    return $this->size;
  }
  public function getMaterial()
  {
    return $this->material;
  }
}
