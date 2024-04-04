<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Project extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    public function products(){
        return $this->hasMany('App\Product');
    }
}
