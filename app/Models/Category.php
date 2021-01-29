<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'Categoris';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'name_cate',
    ];

    public function Product(){
        return $this->hasMany('App\Models\Product','cate_id', 'id');
    }
}
