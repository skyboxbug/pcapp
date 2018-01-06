<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class storage extends Model
{
    //Table Name
    protected $table = 'storages';
    //Primary Key
    public $primarykey = 'id';
    //Timestamps
    public $timestamps = true;
}
