<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Login extends Component
{
    public $username;
    public $password;
    public $remember = false;

    public function login()
    {
        // Mock logic
    }

    public function render()
    {
        return view('livewire.pages.login');
    }
}
