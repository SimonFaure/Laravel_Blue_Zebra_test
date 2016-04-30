<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peoples extends Model
{
    protected $fillable = array('firstName', 'lastName', 'birthday', 'email');
    /*protected $fillable = ['lastName'];
    protected $fillable = ['birthday'];
    protected $fillable = ['email'];*/
}
