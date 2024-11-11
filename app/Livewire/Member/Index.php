<?php

namespace App\Livewire\Member;


use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $currentUser;

    public function mount()
    {
        $this->currentUser = $this->getCurrentUserWithChildrenAndGrandchildren();
    }

    public function getCurrentUserWithChildrenAndGrandchildren()
    {
        // Fetch the current authenticated user with their children and grandchildren
        return auth()->user()->load(['children', 'children.children']);
    }

    public function render()
    {
        return view('livewire.member.index', [
            'currentUser' => $this->currentUser,
            'children' => $this->currentUser->children,
        ]);
    }

//    public function render()
//    {
//        return view('livewire.member.index')->with([
//            'list' => User::all(),
//        ]);
//    }
}
