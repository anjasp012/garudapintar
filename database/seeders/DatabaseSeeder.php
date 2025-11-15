<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Question;
use App\Models\QuestionOption;
use App\Models\Topic;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'anjas',
            'email' => 'anjas@gmail.com',
            'role' => 'participant',
        ]);


        $categoriesData = [
            'Bahasa Inggris' => ['Tenses', 'Vocabulary', 'Grammar'], // 3 topik
            'Bahasa Indonesia' => ['Kata Baku', 'Sinonim', 'Teks Cerita'], // 3 topik
            'Matematika' => ['Aljabar', 'Geometri'], // 2 topik
        ];

        $jumlahSoalPerTopik = 20;

        foreach ($categoriesData as $categoryName => $topics) {
            $category = Category::create([
                'name' => $categoryName,
                'description' => $categoryName,
            ]);

            foreach ($topics as $topicName) {
                $topic = $category->topics()->create([
                    'name' => $topicName,
                    'description' => $topicName,
                ]);

                for ($i = 0; $i < $jumlahSoalPerTopik; $i++) {
                    $question = Question::factory()
                        ->for($category)
                        ->for($topic)
                        ->create();

                    if ($question->type == 'single_choice') {
                        $options = ['A', 'B', 'C', 'D'];
                        foreach ($options as $label) {
                            $question->questionOptions()->create([
                                'option_label' => $label,
                                'option_text' => fake()->sentence(rand(3, 6)),
                            ]);
                        }
                    }
                }
            }
        }
    }
}
