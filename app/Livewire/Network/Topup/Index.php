<?php

namespace App\Livewire\Network\Topup;

use Aaran\Network\Models\Topup;
use App\Livewire\Trait\CommonTraitNew;
use Illuminate\Support\Str;
use Livewire\Component;

class Index extends Component
{
    use CommonTraitNew;

    public $username;
    public $amount;
    public $password;

    #region[save]
    public function getSave(): string
    {
        if ($this->amount != '') {

            if ($this->common->vid == "") {
                Topup::create([
                    'user_id' => auth()->id(),
                    'amount' => $this->amount,
                    'password' => $this->password,
                    'active_id'=>1,
                ]);
                $message = "Saved";

            } else {
                $obj = Topup::find($this->common->vid);
                $obj->user_id = auth()->id();
                $obj->amount = $this->amount;
                $obj->password = $this->password;
                $obj->save();
                $message = "Updated";
            }
//            $this->desc = '';
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
            $obj = Topup::find($id);
            $this->common->vid = $obj->id;
            $this->amount = $obj->amount;
            $this->password = $obj->password;
            return $obj;
        }
        return null;
    }
    #endregion

    #region[Clear-Fields]
    public function clearFields(): void
    {
        $this->common->vid = '';
        $this->amount = '';
        $this->password = '';
    }
    #endregion

    public function render()
    {
        return view('livewire.network.topup.index');
    }
}
