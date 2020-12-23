<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart_item
{
    /**
     * Cart_item constructor.
     * @var $product Product
     */
   public $product ;
   public $qyt ;

    /**
     * Cart_item constructor.
     * @param Product $product
     * @param $qyt
     */
    public function __construct(Product $product, $qyt)
    {
        $this->product = $product;
        $this->qyt = $qyt;
    }


}
