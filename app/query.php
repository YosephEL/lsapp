<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class query extends Model
{
    //
    protected $table = 'pr_producers';


    public $primaryKey  ='id';
    public $foreignKey ='PK_pr_producers';
    public $timestamps = false;

}
