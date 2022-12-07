<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaing extends Model
{
    protected $table = 'campaings';
    protected $primaryKey = 'id';
    protected $fillable = ['message', 'date & time', 'credit' ,'contacts','sender',];
}

