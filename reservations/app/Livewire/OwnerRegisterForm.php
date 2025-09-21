<?php

namespace App\Livewire;

use App\Models\Restaurant;
use Faker;
use Livewire\Component;
use App\Livewire\Forms\OwnerRegisterFormObject;

class OwnerRegisterForm extends Component
{
    public OwnerRegisterFormObject $formObject;

    public function save()
    {
        $this->validate();
        $faker = fake();

        Restaurant::create([
            'title' => $this->formObject->pull('restaurantName'),
            'type' => $this->formObject->pull('cuisineType'),
            'rating' => $faker->numberBetween(10, 50),
            'votes' => $faker->numberBetween(0, 5000),
            'image' => "https://images.unsplash.com/photo-1667388968964-4aa652df0a9b?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        ]);
    }

    public function render()
    {
        return view('livewire.auth.owner-register-form');
    }
}

