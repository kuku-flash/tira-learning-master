<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Greeting_response extends Model
{
    use HasFactory;
    public function greetings() {
        return $this->belongsTo('App\Models\Greeting');
    }
}
