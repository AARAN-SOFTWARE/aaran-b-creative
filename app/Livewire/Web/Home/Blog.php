<?php

namespace App\Livewire\Web\Home;

use Aaran\Blog\Models\BlogTag;
use Aaran\Blog\Models\Post;
use Aaran\Common\Models\Common;
use Aaran\Common\Models\Label;
use App\Livewire\Trait\CommonTraitNew;
use Illuminate\Support\Collection;
use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        return view('livewire.web.home.blog')->layout('layouts.web');
    }
}
