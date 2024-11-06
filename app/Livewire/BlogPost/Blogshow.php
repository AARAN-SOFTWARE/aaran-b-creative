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
        if ($this->common->vname != '') {
            if ($this->common->vid == '') {
                $comment = new Comment();
                $extraFields = [
                    'user_id' => auth()->id(),
                ];
                $this->common->save($comment, $extraFields);
                $this->reset('common.vname');

            } else {
                $comment = Comment::find($this->common->vid);
                $extraFields = [
                    'user_id' => auth()->id(),
                ];
                $this->common->edit($comment, $extraFields);
                $this->reset('common.vname');
            }
        }

    $this->resetPage();
    }

    public function getChange($id)
    {
        if ($id) {
            $BlogComments = Comment::find($id);
            $this->common->vid = $BlogComments->id;
            $this->common->vname = $BlogComments->vname;
            $this->resetPage();

            return $BlogComments;
        }
        return null;
    }

    public function editComments($id): void
    {
        $this->clearFields();
        $this->getChange($id);
    }


    public function deleteData($id): void
    {
        if ($id) {
            $this->clearFields();
            $this->getChange($id);
            $this->showDeleteModal = true;

        }
    }

    public function trashData()
    {
        if ($this->common->vid) {
            $obj = $this->getChange($this->common->vid);
            $obj->delete();
            $this->showDeleteModal = false;
            $this->resetPage();
        }
    }

    #region[Clear-Fields]
    public function clearFields(): void
    {
        $this->common->vid = '';
        $this->common->vname = '';
    }
    #endregion

    public function render()
    {
        return view('livewire.blog-post.blogshow')->layout('layouts.web');;
    }
}
