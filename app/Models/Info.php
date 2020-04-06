<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'content',
        'meta_title',
        'meta_keyword',
        'meta_description',
  ];
}
