<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DetailComponent extends Component
{
    public function render()
    {
        return view('livewire.detail-component')->layout('layouts.base');
    }
}
