<?php

namespace App\Livewire\Web\Dashboard;

use Aaran\Blog\Models\BlogPost;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        return view('livewire.web.dashboard.index')->with([
            'list' => BlogPost::latest()->take(5)->get(),
        ]);
    }
}
