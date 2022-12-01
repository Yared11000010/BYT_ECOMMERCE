<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $table='subcategories';
    protected $fillable=[
        'category_id',
        'name',
        'description',
        'image',
        'status'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }


}
