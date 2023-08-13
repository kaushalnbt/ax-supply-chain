<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $username;
    public $password;
    public $error;

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login()
    {
        $this->error = "";
        $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
            // Authentication successful, redirect to home or dashboard
            return redirect()->route('home'); // Change 'home' to your desired route name
        } else {
            // Authentication failed
            $this->error = 'Invalid credentials. Please try again.';
        }
    }
}
