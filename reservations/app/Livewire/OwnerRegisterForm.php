<?php

namespace App\Livewire;

use App\Models\Restaurant;
use Livewire\Component;
use App\Livewire\Forms\OwnerRegisterFormObject;

class OwnerRegisterForm extends Component
{
    public OwnerRegisterFormObject $formObject;

    public function save()
    {
        $this->validate();

        Restaurant::create([
            'title' => $this->formObject->pull('restaurantName'),
            'type' => $this->formObject->pull('cuisineType'),
            'rating' => 0,
            'votes' => 0
        ]);
    }

    public function render()
    {
        return view('livewire.owner-register-form');
    }
}

