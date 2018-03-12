<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pr_producers extends Model
{
    //
    //
    //documentation
    protected $table = 'pr_producers';


    public $primaryKey  ='id';
    public $foreignKey ='PK_pr_producers';
    public $timestamps = false;




//
//    public function pr_producers()
//    {
//        return $this->hasOne('App\pr_producers', 'foreign_key',$FK_pr_producers);
//    }

}
