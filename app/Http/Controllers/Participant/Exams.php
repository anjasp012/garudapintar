<?php

namespace App\Http\Controllers\Participant;

use App\Http\Controllers\Controller;
use App\Models\ExamSession;
use App\Models\ExamUserAnswer;
use Illuminate\Http\Request;

class Exams extends Controller
{
    public function updateTime(Request $request) {
        $examSession = ExamSession::find($request->exam_session_id);
        $examSession->update([
            'remaining_time' => $request->remaining_time - 1
        ]);
    }

    private function saveAnswer(int $questionId, ?string $answer = null, ?bool $isDoubt = false): void
    {
        $values = array_filter([
            'answer' => $answer ? json_encode($answer) : null,
            'is_doubt' => $isDoubt,
        ], fn($v) => !is_null($v));

        ExamUserAnswer::updateOrCreate(
            ['exam_session_question_id' => $questionId],
            $values
        );
    }

    public function answer(string $type, int $questionId, ?string $answer = null)
    {
        $record = ExamUserAnswer::firstOrNew(['exam_session_question_id' => $questionId]);

        switch ($type) {
            case 'doubt':
                $record->is_doubt = !$record->is_doubt;
                $record->save();
                break;

            case 'single_choice':
                $this->saveAnswer($questionId, $answer);
                break;

            case 'essay':
                if (trim((string) $answer) !== '') {
                    $this->saveAnswer($questionId, $answer);
                }
                break;
        }

        return response()->noContent();
    }
}
