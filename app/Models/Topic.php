<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $fillable = [
        'topic_name',
        'language_id',  
        'level_id',        
    ];
    public function language() {
        return $this->belongsTo('App\Models\language');
    }
    public function level() {
        return $this->belongsTo('App\Models\Level');
    }
    public function lesson() {
        return $this->hasMany('App\Models\Lesson');
    }
    public function TopicQuestions()
    {
        return $this->hasMany(Question::class, 'topic_id', 'id');
    }
    public function greeting()
    {
        return $this->hasMany(Greeting::class, 'topic_id');
    }
}
