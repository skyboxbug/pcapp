<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ram extends Model
{
    //Table Name
    protected $table = 'rams';
    //Primary Key
    public $primarykey = 'id';
    //Timestamps
    public $timestamps = true;
}
