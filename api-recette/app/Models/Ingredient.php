<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ingredient extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_id', // 'product_id' is the foreign key
        'name',
        'size',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
