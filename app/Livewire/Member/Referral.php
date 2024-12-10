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
        // Initialize an array to hold collections for each level
        $levels = [];
        $levels[1] = $currentUser->children; // Level one children

        // Loop through levels 2 to 10
        for ($level = 2; $level <= 10; $level++) {
            $levels[$level] = collect(); // Initialize the collection for this level

            // Get the children of the previous level
            foreach ($levels[$level - 1] as $parent) {
                $levels[$level] = $levels[$level]->merge($parent->children);
            }
        }
        return view('livewire.member.referral', )->with([
            'level'=>[
                '1' => $levels[1],
                '2' => $levels[2],
                '3' => $levels[3],
                '4' => $levels[4],
                '5' => $levels[5],
                '6' => $levels[6],
                '7' => $levels[7],
                '8' => $levels[8],
//                '9' => $levels[9],
//                '10' => $levels[10],
            ], 'currentUser' => $currentUser,
        ]);
    }

}
