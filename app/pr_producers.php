<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pr_producers extends Model
{
    //
    //
    //documentation
    protected $table = 'pr_producers';


    protected $primaryKey  ='$PK_pr_producers';

    protected $foreignKey ='$FK_pr_producers';





    public function pr_producers()
    {
        return $this->belongsTo('App\pr_producers', '$FK_pr_producers');
    }




}
