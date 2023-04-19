<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['product_img', 'product_name', 'product_cost', 'product_desc', 'product_stock', 'product_is_active'];
}
