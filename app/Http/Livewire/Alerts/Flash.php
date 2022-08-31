<?php

namespace App\Http\Livewire\Alerts;

use Livewire\Component;

class Flash extends Component
{
    protected $listeners = ['flashComponent' => '$refresh'];

    public function render()
    {
        return view('livewire.alerts.flash');
    }
}
