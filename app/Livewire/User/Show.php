<?php

namespace App\Livewire\User;

use Livewire\Attributes\Title;
use Livewire\Component;

// #[Title()]
class Show extends Component
{
    public \App\Models\User $user;

    public function render()
    {
        return view('livewire.user.show')->title(title: 'user :' . $this->user->name);
    }
}
