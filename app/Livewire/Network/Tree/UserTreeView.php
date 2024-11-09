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
        $this->users = User::with('children')->get();
//        ->groupBy('parent_id');
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
