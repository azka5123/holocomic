<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function rCategory()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function rSubCategory()
    {
        return $this->belongsTo(Sub_Category::class, 'id_sub_category');
    }
}
