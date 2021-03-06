<?php

namespace Api;

use SilverStripe\ORM\DataObject;

class Cart extends DataObject
{
  private static $table_name = 'carts';

  private static $db = [
    'Quantity' => 'Int',  //jumlah product yang dipesan
    'isChecked' => 'Boolean' // status apakah product di centang atau tidak
  ];

  private static $has_one = [
    'Customer' => Customer::class,
    'Product' => Product::class,
  ];
}
