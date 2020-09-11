<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [ 'supplier_id', 'item_name', 'quantity', 'message' ];

    protected $hidden = [ 'created_at', 'updated_at' ];
}
