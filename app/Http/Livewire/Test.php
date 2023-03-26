<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.test');
    }
}
