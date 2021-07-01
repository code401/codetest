<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Variant;


class Product extends Model
{
    protected $fillable = [
        'title', 'sku', 'description'
    ];


    public function variantdata() {
        return $this->belongsTo(Variant::class, 'product_id');
    }

}
