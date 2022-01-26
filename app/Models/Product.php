<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'productName',
        'productImage',
        'productQuantity',
        'productPrice',
        'productDescription',
        'productCategoryID'
    ];
    public function product(){
        return $this->belongsTo('App\Model\Category');
    }
}
