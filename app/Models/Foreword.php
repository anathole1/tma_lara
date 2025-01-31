<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foreword extends Model
{
    protected $fillable = ['title','message','image','position','name'];
}