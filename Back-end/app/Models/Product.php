<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'productID';
    protected $filltable = [
        'productID','brandID','productCode','productName',
        'description','productImage','listPrice','discountPercent','gearBox'
    ];
}
