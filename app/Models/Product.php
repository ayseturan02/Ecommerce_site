<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use Sluggable;
    protected $fillable=[
        "name",
        "slug",
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

    public function category(){
     return $this->hasOne(Category::class,"id","category_id");
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

}
