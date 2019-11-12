<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = ['name', 'pic', 'address', 'taste', 'text', 'user'];

    public function taste()
    {
        return $this->hasOne('App\Taste', '');
    }
}
