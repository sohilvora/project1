<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $table = "checkout";
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
