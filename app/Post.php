<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table Name
    protected $table = 'posts';
    //primary key
    public $primaryKey = 'id';
    //Timestamps
    public $Timestamps = true;
    
}
