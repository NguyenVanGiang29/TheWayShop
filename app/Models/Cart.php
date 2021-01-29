<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'Carts';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'prd_id',
        'quality',
        'status',
    ];

    public function User(){
        return $this->belongsTo('App\Models\Users','user_id');
    }

    public function Product(){
        return $this->hasMany('App\Models\Product','prd_id','id');
    }
}
