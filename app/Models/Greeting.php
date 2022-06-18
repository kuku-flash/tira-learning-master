<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Greeting extends Model
{
    use HasFactory;
    public function greeting_response(){
        return $this->hasMany('App\\Models\Greeting_response');
    }
    public function topic() {
        return $this->belongsTo(Topic::class);
    }
}
