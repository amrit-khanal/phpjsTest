<?php

class Product
{
  static $products = [['id' => 1, 'price' => 20], ['id' => 2, 'price' => 50], ['id' => 2, 'price' => 60]];

  private $productData = [];

  private $thressholdValue;

  private $filterdData = [];

  public function __construct($products = [])
  {
    $this->productData = $products;
  }

  public function setThressHold($thressHold = 0)
  {
    $this->thressholdValue = $thressHold;
  }

  public function getHigherProduct()
  {
    return $this->filterdData = array_filter($this->productData, function ($prd) {
      return ($prd['price'] > $this->thressholdValue);
    });
  }

  public function calclualteSum()
  {
    return  array_sum(array_map(function ($prod) {
      return $prod['price'];
    }, $this->filterdData));
  }
}
