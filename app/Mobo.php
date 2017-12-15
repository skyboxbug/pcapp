<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobo extends Model
{
    //Table Name 
    protected $table = 'mobos';
    //Primary Key
    public $primarykey = 'id';
    //Timestamps
    public $timestamps = true;
}
