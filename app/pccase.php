<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pccase extends Model
{
    //Table Name 
    protected $table = 'pccases';
    //Primary Key
    public $primarykey = 'id';
    //Timestamps
    public $timestamps = true;
}
