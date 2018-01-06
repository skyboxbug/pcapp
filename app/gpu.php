<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gpu extends Model
{
    //Table Name 
    protected $table = 'gpus';
    //Primary Key
    public $primarykey = 'id';
    //Timestamps
    public $timestamps = true;
}
