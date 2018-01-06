<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class psu extends Model
{
    //Table Name
    protected $table = 'psus';
    //Primary Key
    public $primarykey = 'id';
    //Timestamps
    public $timestamps = true;
}
