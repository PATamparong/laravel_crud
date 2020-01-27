<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Human extends Model
{
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'email',
        'age',
        'gender',
        'address'
    ]; 

    protected $table ='human';
}
