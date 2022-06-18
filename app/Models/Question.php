<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function questionOptions()
    {
        return $this->hasMany(Option::class, 'question_id', 'id');
    }

    public function questionsResults()
    {
        return $this->belongsToMany(Result::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id');
    }
    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }
}
