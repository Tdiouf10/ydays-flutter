<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_id', // 'product_id' is the foreign key
        'user_id', // 'user_id' is the foreign key
        'review',
        'created_at',
        'updated_at',
    ];
}
