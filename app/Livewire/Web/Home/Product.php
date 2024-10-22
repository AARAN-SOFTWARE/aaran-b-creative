<?php

namespace App\Livewire\Web\Home;

use Livewire\Component;

class Product extends Component
{
    public function render()
    {
        return view('livewire.web.home.product')->layout('layouts.web');
    }
}
