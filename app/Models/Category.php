<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable=[
        'group_id',
        'name',
        'image',
        'discount',
        'description',
        'url',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status'
    ];
}
