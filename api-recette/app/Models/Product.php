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
        'name',
        'description',
        'category_id',
    ];


    protected $casts = [
        'dificulty' => 'integer',
        'number_of_people' => 'integer',
        'cooking_time' => 'integer',
        'preparation_time' => 'integer',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
