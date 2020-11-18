<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $cast =[
        'name' => 'ucfirst'
    ];

    public function getNameAttribute($value){
        return ucfirst($value);
    }

    protected $hidden =[
        'updated_at','deleted_at'
    ];
}
