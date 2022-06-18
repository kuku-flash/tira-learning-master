<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'lesson_name',
        'eng_trans',
        'native_trans',
        'ar_trans',
        'image',
        'descrition',
        'lesson_audio',
        
    ];

    public function topic() {
        return $this->belongsTo('App\Models\Topic');
    }
}
