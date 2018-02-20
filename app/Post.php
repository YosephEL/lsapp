<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //documentation
    //Table name
    protected $table='posts';
    //
    public $primaryKey ='id';
    // timestamps
    public $timestamps = true;

    public function user(){
    return $this->belongsTo('App\User');
}
}
