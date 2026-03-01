<?php

namespace App\Livewire;

use App\Livewire\Forms\RegisterFormObject;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RegisterForm extends Component
{
    public RegisterFormObject $form;

    public function register(): void
    {
        $validated = $this->form->validate();

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
        ]);

        Auth::login($user);

        $this->form->reset();
        $this->resetErrorBag();

        $this->redirectRoute('welcome');
    }

    public function render()
    {
        return view('livewire.auth.register-form');
    }
}
