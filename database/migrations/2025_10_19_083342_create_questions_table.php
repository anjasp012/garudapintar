<?php

use App\Models\Category;
use App\Models\Topic;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('topic_id')->constrained('topics')->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('type', ['single_choice', 'multiple_choice', 'essay']);
            $table->longText('question');
            $table->longText('correct_answer');
            $table->longText('explanation');
            $table->text('score');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
