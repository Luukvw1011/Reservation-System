<?php

namespace App\Livewire\Forms;

use Livewire\Form;

class LoginFormObject extends Form
{
    public string $email = '';

    public string $password = '';

    public bool $remember = false;

    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string'],
            'remember' => ['boolean'],
        ];
    }
}
