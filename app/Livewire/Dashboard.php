<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard')]

class Dashboard extends AdminComponent
{
    public function render()
    {
        return view('livewire.dashboard');
    }
}