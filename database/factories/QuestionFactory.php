<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class QuestionFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $typeSoal = ['single_choice', 'essay'];
        $type = rand(0, 1);
        $correct = ['A', 'B', 'C', 'D', 'E'];
        return [
            'type' => $typeSoal[$type],
            'question' => fake()->paragraph(),
            'correct_answer' => $type == 0 ? $correct[rand(0, 3)] : fake()->sentence(1),
            'explanation' => fake()->paragraph(),
            'score' => 1
        ];
    }
}
