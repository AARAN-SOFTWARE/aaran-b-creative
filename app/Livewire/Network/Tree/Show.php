<?php

namespace App\Livewire\Network\Tree;

use App\Models\User;
use Livewire\Component;

class Show extends Component
{
    public $users;
//    public $userTree;
    public $user_id;

    public function mount($id)
    {
        // Load users with their parent-child relationships
        $this->users = $this->getUsersWithLimitedChildren();
        $this->user_id = $id;
    }
    public function getUsersWithLimitedChildren()
    {
        // Step 1: Eager load users with their children
        $users = User::with('children')->get();

        // Step 2: Limit each user's children recursively
        $users->each(function ($user) {
            $this->limitChildren($user, 2, 0); // Limit to first 2 children and start at level 0
        });

        return $users; // Return the modified users collection
    }

    private function limitChildren($user, $limit, $currentLevel)
    {
        // Limit the user's direct children if we are below the max level
        if ($currentLevel < 3) {
            $user->children = $user->children->take($limit);

            // Recursively limit each child's children, increasing the level
            foreach ($user->children as $child) {
                $this->limitChildren($child, $limit, $currentLevel + 1);
            }
        } else {
            // If we reach level 5, clear children to prevent further nesting
            $user->children = collect(); // Clear children at level 5
        }
    }

    public function render()
    {
        return view('livewire.network.tree.show')->with([
            'userTree' => $this->buildTree($this->users,$this->user_id),
        ]);
    }

    private function buildTree($users, $parentId = null)
    {
        $branch = [];

        foreach ($users as $user) {
            if ($user->id == $parentId) {
                $branch[] = $user;
            }
        }
//                dd($branch);
        return $branch;
    }
}
