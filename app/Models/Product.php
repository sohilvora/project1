<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primaryKey = "p_id";
    protected $fillable = [
        'p_name',
        'p_price',
        'p_detail',
        'p_c_id',
        'p_image',
    ];
    public $timestamps = false;
   
}
