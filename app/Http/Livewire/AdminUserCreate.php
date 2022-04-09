<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class AdminUserCreate extends Component
{
    public $form = [
        'name' => '',
        'email' => '',
        'password' => '',
        'password_confirmation' => '',
    ];

    public function UserStore()
    {
        $this->validate([
            'form.name' => 'required|min:3',
            'form.email' => 'required|email|unique:users,email',
            'form.password' => 'required|confirmed',
        ]);

        //dd($this->form);
        User::create($this->form);

        return redirect()->route('users.index')->with('message', 'User Created Successfully');
    }

    public function render()
    {
        return view('livewire.admin-user-create');
    }
}
