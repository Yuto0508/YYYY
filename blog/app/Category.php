<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Categoryに対するリレーション

    //「1対多」の関係なので単数系に 
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function getByCategory(int $limit_count = 5)
    {
         return $this->posts()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}

