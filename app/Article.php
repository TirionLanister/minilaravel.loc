<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

    protected $fillable = ['title','alias','desc','text','keywords','meta_desc'];
}