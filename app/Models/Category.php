<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Product;

class Category extends Model
{
    use Sluggable;
   protected $fillable=[
     "image",
     "thumbnail",
     "name",
     "slug",
     "content",
     "cat_ust",
     "status"
   ];

   public function items(){
       return $this->hasMany(Product::class,"category_id","id");
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
