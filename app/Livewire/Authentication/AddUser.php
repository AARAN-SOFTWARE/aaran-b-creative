<?php

namespace App\Livewire\Authentication;

use App\Livewire\Trait\CommonTrait;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddUser extends Component
{
    use CommonTrait;
    use WithFileUploads;

    public $username;
    public $name;
    public $email;
    public $phone;
    public $password;
    public $password_confirmation;
    public $usertype;
    public $parent_id;
    public $position;
    public $referrer_id;
    public $prefix = 'AB';

    public function mount($id, $position)
    {
        $this->parent_id = $id;
        $this->referrer_id = User::find($id)->username;
        if ($position == 'L') {
            $this->position = 'left';
        } elseif ($position == 'R') {
            $this->position = 'right';
        }
        $this->generateUsername();
    }

    public function generateUsername()
    {
        // Get the highest existing username with the specified prefix
        $lastUser = User::where('username', 'like', $this->prefix . '%')
            ->orderBy('username', 'desc')
            ->first();

        if ($lastUser) {
            // Extract the numeric part and increment it
            $lastNumber = (int) substr($lastUser->username, strlen($this->prefix));
            $newNumber = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT); // Pad with zeros
            $this->username = $this->prefix . $newNumber; // Generate new username
        } else {
            // If no users exist, start with AB0001
            $this->username = $this->prefix . '0001';
        }
    }

    public function updatedPasswordConfirmation()
    {
        // Check if passwords match as user types in the confirm password field
        if ($this->password !== $this->password_confirmation) {
            $this->addError('password_confirmation', 'Password and Confirm Password do not match.');
        } else {
            $this->resetErrorBag('password_confirmation'); // Clear the error if passwords match
        }
    }

    protected $rules = [
//        'name' => 'required|max:100',
//        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|min:8|confirmed',
        'password_confirmation' => 'required',
    ];

    public function getSave()
    {
//        $this->validate();
        $level = 0;
//        $position = null;

        if ($this->parent_id) {
            $parent = User::findOrFail($this->parent_id);
            $level = $parent->calculateLevel() + 1;

//            if ($parent->children()->where('position', 'left')->exists()) {
//                if (!$parent->children()->where('position', 'right')->exists()) {
//                    $position = 'right';
//                } else {
//                    $this->showEditModal = false;
//                    return; // Exit if both positions are filled
//                }
//            } else {
//                $position = 'left';
//            }
        }

        if ($this->username != '') {
            // Final check that password and confirmation match before saving
            if ($this->password !== $this->password_confirmation) {
                $this->addError('password_confirmation', 'Password and Confirm Password do not match.');
                return;
            }

            // Clear the error if passwords match
            $this->resetErrorBag('password_confirmation');

            // Proceed with user creation
            $obj = User::create([
                'username' => $this->username,
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'usertype' => 'user',
                'parent_id' => $this->parent_id,
                'level' => $level,
                'position' => $this->position,
                'password' => bcrypt($this->password), // Encrypt the password
            ]);

            Auth::login($obj);
            $this->redirectToDashboard();
            $this->dispatch('notify', ['type' => 'success', 'content' => 'User created successfully']);
        }
    }

    public function redirectToDashboard()
    {
        return redirect()->route('dashboard');
    }

    public function clearFields(): void
    {
        $this->username = '';
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->usertype = '';
        $this->password = '';
        $this->password_confirmation = '';
    }

    public function render()
    {
        return view('livewire.authentication.add-user')->layout('layouts.guest');
    }
}
