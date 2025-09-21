<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class OwnerRegisterFormObject extends Form
{
    #[Validate('required|min:5')]
    public $fullName = '';

    #[Validate('required|min:5')]
    public $email = '';

    #[Validate('required|min:5')]
    public $phoneNumber = '';

    #[Validate('required|min:5')]
    public $restaurantName = '';

    #[Validate('required|min:5')]
    public $cuisineType = '';

//    public $image = '';
}
