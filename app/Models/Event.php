<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title','summary','description','user_id','image'];


    public function user(){
        return $this->belongsTo(User::class);
    }
}