<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id', // Assuming you have a category_id field in the products table
        // Add more fields as needed
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
