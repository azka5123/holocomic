<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Category extends Model
{
    use HasFactory;
    protected $table = 'sub_categorys';

    public function rCategory()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
}
