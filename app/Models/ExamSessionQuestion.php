<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamSessionQuestion extends Model
{
    protected $guarded = ['id'];

    public function question() {
        return $this->belongsTo(Question::class);
    }

    public function examUserAnswer() {
        return $this->hasOne(ExamUserAnswer::class);
    }
}
