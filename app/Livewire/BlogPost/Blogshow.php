<?php

namespace App\Livewire\BlogPost;

use Aaran\Blog\Models\BlogPost;
use Aaran\Blog\Models\Comment;
use App\Livewire\Trait\CommonTraitNew;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Blogshow extends Component
{
    use CommonTraitNew;
    use WithFileUploads;

    public $blog;

    public $comments = [];
    public $commentsIndex='';
    public $comment;
    public $blog_post_id;
    public $image;
    public $old_image;

    protected $rules = [
        'common.vname' => 'required|string|max:500',
    ];

    public function mount($id)
    {
        $this->blog = BlogPost::find($id);
        $this->blog_post_id = $id;
        $this->getComments();

    }

    public function getComments()
    {
        $this->comments = Comment::with('user')->latest()->where('blog_post_id','=',$this->blog_post_id)->get();

    }

    public function submitComment()
    {
        $this->validate();
        if ($this->common->vname != '') {
            if ($this->common->vid == '') {
                $comment = new Comment();
                $extraFields = [
                    'user_id' => auth()->id(),
                    'blog_post_id' => $this->blog_post_id,
                    'image' => $this->saveImage(),
                ];
                $this->common->save($comment, $extraFields);
                $this->reset('common.vname');

            } else {
                $comment = Comment::find($this->common->vid);
                $extraFields = [
                    'user_id' => auth()->id(),
                    'blog_post_id' => $this->blog_post_id,
                    'image' => $this->saveImage(),
                ];
                $this->common->edit($comment, $extraFields);
                $this->reset('common.vname');
            }
        }

    $this->getComments();
    }

    #region[Image]
    public function saveImage()
    {
        if ($this->image) {

            $image = $this->image;
            $filename = $this->image->getClientOriginalName();

            if (Storage::disk('public')->exists(Storage::path('public/images/' . $this->old_image))) {
                Storage::disk('public')->delete(Storage::path('public/images/' . $this->old_image));
            }

            $image->storeAs('images', $filename,'public');

            return $filename;

        } else {
            if ($this->old_image) {
                return $this->old_image;
            } else {
                return 'no image';
            }
        }
    }
    #endregion

    public function getChange($id)
    {
        if ($id) {
            $BlogComments = Comment::find($id);
            $this->common->vid = $BlogComments->id;
            $this->common->vname = $BlogComments->vname;
            $this->old_image = $BlogComments->image;
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


    public function deleteData($id,$index): void
    {
        if ($id) {
            $this->clearFields();
            $this->getChange($id);
            $this->showDeleteModal = true;

        }
        $this->commentsIndex = $index;
    }

    public function trashData()
    {
        if ($this->common->vid) {
            $obj = $this->getChange($this->common->vid);
            $obj->delete();
            $this->clearFields();
            $this->showDeleteModal = false;

        }
        unset($this->comments[$this->commentsIndex]);
        $this->comments = collect($this->comments);
        $this->commentsIndex='';
    }

    #region[Clear-Fields]
    public function clearFields(): void
    {
        $this->common->vid = '';
        $this->common->vname = '';
        $this->old_image = '';
        $this->image = '';
    }
    #endregion

    public function render()
    {
        return view('livewire.blog-post.blogshow')->layout('layouts.web');
    }
}
