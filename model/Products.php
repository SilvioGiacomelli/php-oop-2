<?php
class Products
{
  private $name;
  private $price;
  private $img;
  private $category;

  public function __construct(string $name, float $price, string $img, string $category)
  {
    $this->name = $name;
    $this->price = $price;
    $this->img = $img;
    $this->category = $category;
  }
  public function getName()
  {
    if (empty($this->name)) {
      throw new Exception("Nome non disponibile");
    }
    return $this->name;
  }

  public function getPrice()
  {
    if ($this->price <= 0) {
      throw new Exception("Prezzo non disponibile");
    }
    return $this->price;
  }

  public function getImg()
  {
    if (empty($this->img)) {
      throw new Exception("Immagine non disponibile");
    }
    return $this->img;
  }

  public function getCategory()
  {
    if (empty($this->category)) {
      throw new Exception("Categoria non disponibile");
    }
    return $this->category;
  }
}
