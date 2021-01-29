<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'Images';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'path',
        'prd_id',
    ];

    public function Product(){
        return $this->belongsTo('App\Models\Product','prd_id', 'id');
    }
}
