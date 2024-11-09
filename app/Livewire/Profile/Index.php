<?php

namespace App\Livewire\Profile;

use Aaran\Profile\Models\Profile;
use Livewire\Component;

class Index extends Component
{
    public $bio;
    public $achievement;

    #region[save]
    public function getSave(): string
    {
        if ($this->user_id != '') {

            if ($this->common->vid == "") {
                Profile::create([
                    'user_id' => auth()->id(),
                    'bio' => $this->bio,
                    'achievement' => $this->achievement,
                ]);
                $message = "Saved";

            } else {
                $obj = Profile::find($this->common->vid);
                $obj->user_id = auth()->id();
                $obj->bio = $this->bio;
                $obj->achievement = $this->achievement;
                $obj->save();
                $message = "Updated";
            }
            $this->dispatch('notify', ...['type' => 'success', 'content' => $message . ' Successfully']);
        }
        $this->clearFields();
        return '';
    }
    #endregion

    #region[obj]
    public function getObj($id)
    {
        if ($id) {
            $obj = Profile::find($id);
            $this->common->vid = $obj->id;
            $this->bio = $obj->bio;
            $this->achievement = $obj->achievement;
            return $obj;
        }
        return null;
    }
    #endregion


    #region[Clear-Fields]
    public function clearFields(): void
    {
        $this->common->vid = '';
        $this->common->vname = '';
        $this->bio = '';
        $this->achievement = '';
    }
    #endregion


    public function render()
    {
        return view('livewire.profile.index')->with([
            'list' => Profile::all(),
        ]);
    }
}
