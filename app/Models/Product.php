<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'tensp', // Add 'tensp' to the fillable array
        'gia',
        'soluong',
        'mota',
    ];
}
