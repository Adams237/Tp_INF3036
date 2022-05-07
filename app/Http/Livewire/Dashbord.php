<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashbord extends Component
{
    public function render()
    {
        return view('dashbord')->layout('layouts.app2');
    }
}
