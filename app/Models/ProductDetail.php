<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $fillable = [
        "product_id",
        "meta_title",
        "meta_keyword",
        "meta_description",
        "code",
        "brand",
        "bh",
        "xx",
        "short_description"
    ];
}
