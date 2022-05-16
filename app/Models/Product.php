<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $fillable=['name','price','photo','category'];
    protected $table = 'products';

    public function categories(){
    	return $this->hasOne(Category::class,'id','category');
    }
}
