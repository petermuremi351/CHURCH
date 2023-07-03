<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SermonsComponent extends Component
{
    public function render()
    {
        return view('livewire.sermons-component')->layout('layouts.base');
    }
}
