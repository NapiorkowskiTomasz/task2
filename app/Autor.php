<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $fillable = ['name','id'];

    public function titles()
    {
        return $this->hasMany('Title');
    }
}