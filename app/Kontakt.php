<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontakt extends Model
{
    protected $fillable = [
        'id',
        'ime',
        'grad_id',
        'razred_id',
        'email',
        'cas',

    ];

    public function category(){
        return $this->belongsTo('App\Category', 'id');
    }

    public function grad(){
        return $this->belongsTo('App\Grad', 'id');
    }

}
