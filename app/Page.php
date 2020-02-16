<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Page extends Model 
{
    protected $table = 'pages';

    public $primaryKey = "id";
    
    protected $fillable = ['title', 'slug', 'content',];
}