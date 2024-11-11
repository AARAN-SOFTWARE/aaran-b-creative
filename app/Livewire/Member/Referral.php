<?php

namespace App\Livewire\Member;

use Livewire\Component;

class Referral extends Component
{

    public function getCurrentUserWithChildren()
    {
        // Fetch the current authenticated user with their children
        $currentUser = auth()->user()->load('children');

        return $currentUser;
    }

    public function render()
    {
        $currentUser = $this->getCurrentUserWithChildren();

        return view('livewire.member.referral', [
            'currentUser' => $currentUser,
            'children' => $currentUser->children,
        ]);
    }

//    public function render()
//    {
//        return view('livewire.member.referral');
//    }
}
