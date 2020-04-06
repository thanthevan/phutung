<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = [
          'name',
          'parent_id',
          'promo_photo',
          'meta_title',
          'meta_title',
          'meta_keyword',
          'meta_description',
          'slug'
    ];

}
