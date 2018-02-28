<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pr_producers extends Model
{
    //
    //
    //documentation
    protected $table = 'pr_producers';

    public $primaryKey ='PK_pr_producers';

    public $forainKey = 'PK_pr_producers';
    // timestamps
    //public $timestamps = true;    //

    public function pr_producers(){
        return $this->hasMany('App\pr_producers');
    }
}
