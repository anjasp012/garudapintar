<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'participant', 'as' => 'participant.', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', App\Livewire\Participant\Dashboard::class)->name('dashboard');

    Route::get('/exams', App\Livewire\Participant\Exams\Index::class)->name('exams.index');

    Route::get('/my-exams', App\Livewire\Participant\MyExams\Index::class)->name('my-exams.index');
    // Route::get('/my-exams/create', App\Livewire\Participant\MyExams\Create::class)->name('exams.create');
    // Route::get('/my-exams/edit/{exam}', App\Livewire\Participant\MyExams\Edit::class)->name('exams.edit');
    Route::get('/my-history-exams', App\Livewire\Participant\MyHistoryExams\Index::class)->name('my-history-exams.index');
    Route::get('/my-history-exams/{id}/ranking', App\Livewire\Participant\MyHistoryExams\Ranking::class)->name('my-history-exams.ranking');
    Route::get('/my-history-exams/{id}/analysis', App\Livewire\Participant\MyHistoryExams\Analysis::class)->name('my-history-exams.analysis');
    Route::get('/my-history-exams/{id}/certificate', App\Livewire\Participant\MyHistoryExams\Certificate::class)->name('my-history-exams.certificate');

    Route::get('/certificates', App\Livewire\Participant\Certificates\Index::class)->name('certificates.index');

    Route::get('/settings', App\Livewire\Participant\Settings::class)->name('settings');
});

// Route::group(['prefix' => 'participant', 'as' => 'participant.', 'middleware' => 'auth'], function () {
//     Route::get('/exams', App\Livewire\Participant\Exams\Index::class)->name('exams.index');
//     Route::get('/exams/start/{examSession}', App\Livewire\Participant\Exams\Start::class)->name('exams.start');
//     Route::post('/exams/start/{type}/{question}/{answer}', [App\Http\Controllers\Participant\Exams::class, 'answer'])->name('exams.answer.submit');
//     Route::post('/exams/start/update-time', [App\Http\Controllers\Participant\Exams::class, 'updateTime'])->name('exams.update-time');
// });
