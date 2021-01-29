<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'Products';
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'code',
        'name_prd',
        'description',
        'cate_id',
        'price',
        'is_hot',
        'is_sale',
    ];

    public function Category(){
        return $this->belongsTo('App\Models\Category', 'cate_id', 'id');
    }

    public function Image(){
        return $this->hasMany('App\Models\Image','prd_id','id');
    }

    public function Cart(){
        return $this->hasMany('App\Models\Cart','prd_id','id');
    }
}
