<?php

namespace App\Livewire;

use App\Models\Restaurant;
use Livewire\Component;

class FeaturedList extends Component
{
    public function render()
    {
        return view('livewire.featured-list', [
            "restaurants" => Restaurant::orderBy('rating', 'desc')->take(3)->get(),
        ]);
    }
}
