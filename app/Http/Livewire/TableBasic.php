<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class TableBasic extends Component
{
    public function render(Request $request)
    {
        dd($request);
        // return view('livewire.table-basic')->layout('layouts.app2');
    }
}
