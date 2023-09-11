<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        "name",
        "image",
        "category_id",
        "short_text",
        "price",
        "size",
        "color",
        "qty",
        "status",
        "content",
    ];

}
