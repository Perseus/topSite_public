<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    public $table = 'News';
    protected $connection = 'SiteInfo';
}