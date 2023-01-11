<?php

require_once __DIR__ . "/Product.php";
class Food extends Product {

  public function __construct($name, $category, $image, $price, $type)
  {
    parent::__construct($name, $category, $image, $price, $type);
  }
  // rivedere length
}