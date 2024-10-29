<?php

namespace App\Livewire\Web\Home;

use Aaran\Web\Models\Home;
use App\Livewire\Trait\CommonTraitNew;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use CommonTraitNew;
    use WithFileUploads;


    public function openModal():void
    {
        $this->showEditModal = true;
    }
//    public function getData(){
//        $this->slides = HomeSlide::take(4)->latest()->get();
//}
    public function render()
    {
//        $this->getData();
        return view('livewire.web.home.index')->layout('layouts.web');
    }


}
