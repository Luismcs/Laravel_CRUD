<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Category extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    public function products(){
        return $this->hasMany('App\Product');
    }
}
