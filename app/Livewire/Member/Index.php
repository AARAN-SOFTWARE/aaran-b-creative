<?php

namespace App\Livewire\Member;

use Aaran\Member\Models\Member;
use App\Livewire\Trait\CommonTraitNew;
use Livewire\Component;

class Index extends Component
{
    use CommonTraitNew;

    public $level;
    public $uid;
    public $member_id;


    public function getSave()
    {
        if ($this->common->vname != '') {
            if ($this->common->vid == '') {
                $Member = new Member();
                $extraFields = [
                    'level' => $this->level,
                ];
                $this->common->save($Member, $extraFields);
                $message = "Saved";
            }
            $this->dispatch('notify', ...['type' => 'success', 'content' => $message . ' Successfully']);
        }
        $this->clearFields();


    }

    #region[Get-Obj]
    public function getObj($id)
    {
        if ($id) {
            $Member = Member::find($id);
            $this->common->vid = $Member->id;
            $this->common->vname = $Member->vname;
            $this->level = $Member->level;
            $this->common->active_id = $Member->active_id;
            return $Member;
        }
        return null;
    }
    #endregion


    #region[Clear-Fields]
    public function clearFields(): void
    {
        $this->common->vid = '';
        $this->common->vname = '';
        $this->level = '';
        $this->common->active_id = 1;
    }

    #endregion
    public function render()
    {
        return view('livewire.member.index')->with([
            'list' => $this->getListForm->getList( Member::class),
        ]);
    }
}
