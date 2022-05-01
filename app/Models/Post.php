<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function category(){
        return $this->belongsTo('App\Models\Category','category_id','id');
    }
    public function getRouteKeyName(){
        return 'slug';
     }
    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function comments(){
        return $this->hasMany('App\Models\Comment','post_id');
    }
}
