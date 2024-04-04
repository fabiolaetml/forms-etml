<?php

namespace App\Livewire;

use App\Models\ExitInterview as ModelsExitInterview;
use Model\ExitInterview;
use Livewire\Component;

class ShowTerminationInterview extends Component
{
   
    public function render()
    {
        return view('livewire.show-termination-interview');
    }

    public function create()
    {
       
    }
    
}
