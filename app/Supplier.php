<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [ 'product_id', 'first_name', 'last_name', 'email', 'address', 'contact_number'];

    protected $hidden = ['created_at', 'updated_at'];
}
