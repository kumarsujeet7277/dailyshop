<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AccountDetailComponent extends Component
{
    public function render()
    {
        return view('livewire.account-detail-component')->layout('layouts.base');
    }
}
