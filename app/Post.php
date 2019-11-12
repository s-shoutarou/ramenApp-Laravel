<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['name', 'pic', 'address', 'taste', 'text', 'created_at', 'updated_at'];
}
