<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $table='carts';

    public function product(){
        return $this->hasMany(Product::class, 'id', 'product_id');
    }
}
