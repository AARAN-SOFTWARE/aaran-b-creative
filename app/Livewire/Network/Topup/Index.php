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
        if ($this->username != '') {

            if ($this->common->vid == "") {
                $this->validate(['username' => 'required|unique:topups,username']);
                Topup::create([
                    'user_id' => auth()->id(),
                    'username' => Str::upper($this->username),
                    'amount' => $this->amount,
                    'password' => $this->password,
                ]);
                $message = "Saved";

            } else {
                $obj = Topup::find($this->common->vid);
                $obj->user_id = auth()->id();
                $obj->username = Str::upper($this->username);
                $obj->amount = $this->amount;
                $obj->password = $this->password;
                $obj->save();
                $message = "Updated";
            }
//            $this->desc = '';
            $this->dispatch('notify', ...['type' => 'success', 'content' => $message . ' Successfully']);
        }
        return '';
    }
    #endregion

    #region[obj]
    public function getObj($id)
    {
        if ($id) {
            $obj = Topup::find($id);
            $this->common->vid = $obj->id;
            $this->username = $obj->username;
            $this->amount = $obj->amount;
            $this->password = $obj->password;
            return $obj;
        }
        return null;
    }
    #endregion

    public function render()
    {
        return view('livewire.network.topup.index')->with([
          'list' => Topup::all()
        ]);
    }
}
