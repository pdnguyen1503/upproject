<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $fillable = ['id_product', 'id_customer', 'name', 'price', 'deliver_address', 'deliver_phone'];
}
