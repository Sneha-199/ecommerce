<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function GuzzleHttp\json_decode;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','customername','phonenumber','quantity','products_id'
     ];
     protected $table = 'orders';
     protected $primaryKey = "id";
     protected $foriegnKey = "products_id";

     public function setProductAttribute($value)
     {
         $this->attributes['products_id'] = json_encode($value);
     }

     public function getProductAttribute($value)
     {
         return $this->attributes['products_id'] = json_decode($value);
     }

}

