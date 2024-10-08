<?php

namespace App\Livewire\Member;


use App\Models\User;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        return view('livewire.member.index')->with([
            'list' => User::all(),
        ]);
    }
}
