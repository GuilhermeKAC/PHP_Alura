<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class Serie extends Model {

    public $timestamps = false;
    protected $fillable = ['nome'];

}
