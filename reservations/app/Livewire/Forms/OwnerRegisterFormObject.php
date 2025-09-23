<?php

namespace App\Livewire\Forms;

use Livewire\Form;

class OwnerRegisterFormObject extends Form
{
    public string $restaurant_name = '';

    public string $restaurant_type = '';

    public string $city = '';

    public string $contact_email = '';

    public string $contact_phone = '';

    public string $website = '';

    public string $message = '';

    public bool $accept_terms = false;

    public function rules(): array
    {
        return [
            'restaurant_name' => ['required', 'string', 'max:255'],
            'restaurant_type' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'contact_email' => ['required', 'string', 'email', 'max:255'],
            'contact_phone' => ['nullable', 'string', 'max:50'],
            'website' => ['nullable', 'string', 'url', 'max:255'],
            'message' => ['nullable', 'string', 'max:1000'],
            'accept_terms' => ['accepted'],
        ];
    }
}
