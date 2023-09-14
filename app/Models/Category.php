<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categorys';
    // public function rSubCategory()
    // {
    //     return $this->belongsTo(Sub_Category::class, 'category_id');
    // }
}
