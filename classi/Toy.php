<?php

require_once __DIR__ . "/Product.php";
class Toy extends Product {
 
  public function __construct($name, $category, $image, $price, $type)
  {
    parent::__construct($name, $category, $image, $price, $type);
  }
  // rivedere livello di durezza dei materiali
}