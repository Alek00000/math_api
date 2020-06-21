<?php

namespace App;

use App\Photo;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'id',
        'user_id',
        'category_id',
        'photo_id',
        'title',
        'body',

    ];

    public function user(){
        return $this->belongsTo('App\User', 'id');
    }

    public function photo(){
        return $this->belongsTo('App\Photo', 'id');
    }

    public function category(){
        return $this->belongsTo('App\Category', 'id');
    }

    public function grad(){
        return $this->belongsTo('App\Grad');
    }


}
