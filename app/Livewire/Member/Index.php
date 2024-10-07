<?php

namespace App\Livewire\Member;

use Aaran\Member\Models\Member;
use App\Livewire\Trait\CommonTraitNew;
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
