<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question_result extends Model
{
    public $table = 'question_result';
    use HasFactory;
    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
    public function option()
    {
        return $this->belongsTo(Option::class, 'option_id');
    }
    public function result()
    {
        return $this->belongsTo(Result::class, 'result_id');
    }
}
