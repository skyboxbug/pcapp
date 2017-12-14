<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cpu extends Model
{
    //Table Name
    protected $table = 'posts';
    //Primary Key
    public $primarykey = 'id';
    //Timestamps
    public $timestamps = true;
}
