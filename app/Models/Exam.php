<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function examSettings() {
        return $this->hasMany(ExamSetting::class);
    }

    public function examSession() {
        return $this->hasMany(ExamSession::class);
    }
}
