<?php

namespace App\Livewire\Network\Tree;

use App\Models\User;
use Livewire\Component;

class UserTreeView extends Component
{

    public $users;

    public function mount()
    {
        // Load users with their parent-child relationships
        $this->users = $this->getUsersWithLimitedChildren();
//        ->groupBy('parent_id');
    }
    public function getUsersWithLimitedChildren()
    {
        // Step 1: Eager load users with their children
        $users = User::with('children')->get();

        // Step 2: Limit each user's children to the first two
        $users->each(function ($user) {
            $user->children = $user->children->take(2);
        });

        return $users; // Return the modified users collection
    }

    public function render()
    {
        return view('livewire.network.tree.user-tree-view')->with([
            'userTree' => $this->buildTree($this->users,auth()->id()),
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
        return $branch;
    }


}
