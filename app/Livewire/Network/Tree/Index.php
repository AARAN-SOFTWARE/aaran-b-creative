<?php

namespace App\Livewire\Network\Tree;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    public $user_data;

    public function mount()
    {
//        $this->user_data = DB::table('users')
//            ->withRecursive('users_tree', function ($query) {
//                return $query->select('id', 'name', 'uid')
//                    ->whereNull('uid')
//                    ->unionAll(
//                        DB::table('users')->select('id', 'name', 'uid')
//                            ->join('users_tree', 'users.uid', '=', 'users_tree.id')
//                    );
//            })
//            ->select('*')
//            ->from('users_tree')
//            ->get();
        $this->user_data =   User::with('children')->whereNull('uid')->get();
    }


    public function render()
    {
        return view('livewire.network.tree.index')->with([
            'user' => User::all()
        ]);
    }
}
