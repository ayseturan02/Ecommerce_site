<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        "name",
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
