<?php

namespace App\Livewire\BlogPost;

use Aaran\Blog\Models\BlogPost;
use Aaran\Blog\Models\Comment;
use App\Livewire\Trait\CommonTraitNew;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Blogshow extends Component
{
    use CommonTraitNew;
    use WithFileUploads;

    public $blog;

    public $comments = [];
    public $comment;

    protected $rules = [
        'common.vname' => 'required|string|max:500',
    ];

    public function mount($id)
    {
        $this->blog = BlogPost::find($id);
        $this->comments = Comment::with('user')->latest()->get();

    }

    public function submitComment()
    {
        $this->validate();
        $comment = new Comment();
        $extraFields = [
            'user_id' => auth()->id(),
        ];
        $this->common->save($comment, $extraFields);
        $this->reset('common.vname');
//        $this->redirect(route('blog-post.show', $this->blog));
    }


    public function render()
    {
        return view('livewire.blog-post.blogshow')->layout('layouts.web');;
    }
}
