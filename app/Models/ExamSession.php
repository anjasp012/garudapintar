<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExamSession extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function examSettings()
    {
        return $this->hasManyThrough(
            ExamSetting::class,
            Exam::class,
            'id',       // FK di Exam
            'exam_id',  // FK di ExamSetting
            'exam_id',  // local key di ExamSession
            'id'        // local key di Exam
        );
    }


    public function examSessionQuestions()
    {
        return $this->hasMany(ExamSessionQuestion::class);
    }
}
