<?php

namespace App\Livewire\Admin\Questions;

use App\Imports\QuestionsImport;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class Import extends Component
{
    use WithFileUploads;

    public $file;


    public function save() {
        $this->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        try {
            Excel::import(new QuestionsImport, $this->file->getRealPath());
            $this->dispatch('importSucceeded');
            $this->reset('file');
        } catch (\Throwable $th) {
            $this->addError('file', 'Gagal import: '.$th->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.admin.questions.import');
    }
}
