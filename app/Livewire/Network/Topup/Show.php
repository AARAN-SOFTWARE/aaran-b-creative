<?php

namespace App\Livewire\Network\Topup;

use Aaran\Network\Models\Topup;
use App\Models\User;
use App\Livewire\Trait\CommonTraitNew;
use Livewire\Component;

class Show extends Component
{

//    use CommonTraitNew;
    public function render()
    {
        // Eager load the user relationship when fetching top-ups
        $topups = Topup::with('user')->get();

        return view('livewire.network.topup.show', [
            'topups' => $topups,
        ]);
    }
}
