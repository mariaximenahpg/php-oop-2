<?php

class Product {
  public $name;
  public $category;
  public $image;
  public $price;
  public $type;

  public function __construct($name, $category, $image, int $price, $type)
  {
    $this->name = $name;
    $this->category = $category;
    $this->image = $image;
    $this->price = $price;
    $this->type = $type;
  }
}