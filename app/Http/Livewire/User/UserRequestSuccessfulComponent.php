<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserRequestSuccessfulComponent extends Component
{
    public function render()
    {
        return view('livewire.user.user-request-successful-component')->layout('layouts.authbase');
    }
}
