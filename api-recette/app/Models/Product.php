<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    public const DIFFICULTY_VERY_EASY = 1;

    public const DIFFICULTY_EASY = 2;

    public const DIFFICULTY_MEDIUM = 3;

    public const DIFFICULTY_HARD = 4;

    public const DIFFICULTY_VERY_HARD = 5;

    protected $fillable = [
        'title',
        'description',
        'category_id', 'photo', 'calories', 'time',
    ];

    protected $casts = [
        'calories' => 'integer',
        'time' => 'integer',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function favories()
    {
        return $this->belongsToMany(Product::class, 'favories');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    public function steps()
    {
        $this->hasMany(Tutorial::class);
    }


}
