<?php

namespace App\Livewire\Network\Topup;

use Aaran\Network\Models\Topup;
use App\Livewire\Trait\CommonTraitNew;
use Livewire\Component;

class Show extends Component
{

    use CommonTraitNew;
    public function render()
    {

        return view('livewire.network.topup.show')->with([
            'topups' => $this->getListForm->getList(Topup::class),

        ]);
    }
}
