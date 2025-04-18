<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = "cart";

    protected $fillable = [
        'qty',
        'p_id',
        'user_id',
    ];
    public $timestamps = false;



    public function product()
    {
        return $this->belongsTo(Product::class, 'p_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
