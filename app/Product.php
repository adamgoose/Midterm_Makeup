<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'productID';
    protected $fillable = [
    'categoryID',
    'productCode',
    'productName',
    'listPrice',
    ];
}
