<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\Question;
use App\Models\QuestionOption;
use App\Models\Topic;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class QuestionsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if ($row['tipe_soal'] == 'Pilihan Ganda') {
            $type = 'single_choice';
        } elseif ($row['tipe_soal'] == 'Esai') {
            $type = 'essay';
        };
        $category = Category::where('name', $row['kategori'])->first();
        $topic = Topic::where('name', $row['topik'])->first();
           if (!$category) {
            throw new \Exception("Kategori '{$row['kategori']}' tidak ditemukan di database.");
        }

        if (!$topic) {
            throw new \Exception("Topik '{$row['topik']}' tidak ditemukan di database.");
        }

        $question = Question::create([
            'type'   => $type,
            'category_id'    => $category->id ?? null,
            'topic_id'       => $topic->id ?? null,
            'question'  =>  $row['pertanyaan'] ?? null,
            'correct_answer'     => $row['jawaban'] ?? null,
            'explanation'       => $row['penjelasan'] ?? null,
            'score'       => $row['score'] ?? null,
        ]);


        if ($question->type == 'single_choice') {
            QuestionOption::create([
                'question_id' => $question->id,
                'option_label' => 'A',
                'option_text' => $row['option_a']
            ]);
            QuestionOption::create([
                'question_id' => $question->id,
                'option_label' => 'B',
                'option_text' => $row['option_b']
            ]);
            QuestionOption::create([
                'question_id' => $question->id,
                'option_label' => 'C',
                'option_text' => $row['option_c']
            ]);
            QuestionOption::create([
                'question_id' => $question->id,
                'option_label' => 'D',
                'option_text' => $row['option_d']
            ]);
        }

        return null;
    }
}
