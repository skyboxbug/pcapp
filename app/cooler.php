<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cooler extends Model
{
    //Table Name 
    protected $table = 'coolers';
    //Primary Key
    public $primarykey = 'id';
    //Timestamps
    public $timestamps = true;
}
