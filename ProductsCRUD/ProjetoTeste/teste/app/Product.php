<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name',
        'details',
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function project(){
        return $this->belongsTo('App\Project');
    }
}
