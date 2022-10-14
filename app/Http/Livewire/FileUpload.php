<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\File;
use Livewire\WithFileUploads;
 
class FileUpload extends Component
{   
    use WithFileUploads;
    public $leads_id, $title;
   
    public function render()
    {
        return view('livewire.file-upload');
    }
}
