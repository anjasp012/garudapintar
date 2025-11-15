<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', App\Livewire\Admin\Dashboard::class)->name('dashboard');

    Route::get('/users', App\Livewire\Admin\Users\Index::class)->name('users.index');
    Route::get('/users/create', App\Livewire\Admin\Users\Create::class)->name('users.create');
    Route::get('/users/edit/{user}', App\Livewire\Admin\Users\Edit::class)->name('users.edit');

    Route::get('/questions', App\Livewire\Admin\Questions\Index::class)->name('questions.index');
    Route::get('/questions/create', App\Livewire\Admin\Questions\Create::class)->name('questions.create');
    Route::get('/questions/edit/{question}', App\Livewire\Admin\Questions\Edit::class)->name('questions.edit');

    Route::get('/exams', App\Livewire\Admin\Exams\Index::class)->name('exams.index');
    Route::get('/exams/create', App\Livewire\Admin\Exams\Create::class)->name('exams.create');
    Route::get('/exams/edit/{exam}', App\Livewire\Admin\Exams\Edit::class)->name('exams.edit');

    Route::get('/exam-sessions', App\Livewire\Admin\ExamSessions\Index::class)->name('exam-sessions.index');

    Route::get('/settings', App\Livewire\Admin\Settings::class)->name('settings');
});
