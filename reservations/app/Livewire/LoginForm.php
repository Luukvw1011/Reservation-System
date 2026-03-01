<?php

namespace App\Livewire;

use App\Livewire\Forms\LoginFormObject;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class LoginForm extends Component
{
    public LoginFormObject $form;
    public function login(): void
    {
        $validated = $this->form->validate();

        $user = User::where('email', $validated['email'])->first();

        if (! $user) {
            throw ValidationException::withMessages([
                'form.email' => __('These credentials do not match our records.'),
            ]);
        }

        if (! Hash::check($validated['password'], $user->password)) {
            throw ValidationException::withMessages([
                'form.password' => __('The provided password is incorrect.'),
            ]);
        }

        Auth::login($user, $this->form->remember);

        session()->regenerate();

        $this->form->reset();
        $this->resetErrorBag();

        $this->redirectRoute('welcome');
    }

    public function render()
    {
        return view('livewire.auth.login-form');
    }
}
