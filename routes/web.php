<?php

use App\Livewire\Home;
use App\Livewire\Mulai;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;
use Novay\Word\Facades\Word;

include 'auth.php';

include 'admin.php';

include 'participant.php';


Route::get('/', Home::class)->name('home');
Route::get('mulai', Mulai::class)->name('mulai');

Route::get('download', function () {
    $data = [
        'name' => 'Anjas Putra',
        'exam_title' => 'Ujian A',
        'description' => 'Telah berhasil menyelesaikan Ujian A dengan nilai',
        'date' => '10 November 2025',
        'score' => '80',
        'certificate_number' => 'CERT/2025/12345',
        'signature_name' => 'Imaduddin',
        'signature_title' => 'Ketua Program'
    ];

    $pdf = Pdf::loadView('templates.certificate', $data)
        ->setPaper('a4', 'landscape');

    return $pdf->download('sertifikat-' . $data['name'] . '.pdf');
});
