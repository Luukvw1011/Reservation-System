<?php

namespace App\Livewire;

use App\Models\Restaurant;
use Livewire\Component;

class FeaturedList extends Component
{
    public bool $showModal = false;

    public ?Restaurant $modalContent = null;

    public function openModal(string $restaurantId): void
    {
        $this->modalContent = Restaurant::findOrFail($restaurantId);
        $this->showModal = true;
    }

    public function closeModal(): void
    {
        $this->reset(['showModal', 'modalContent']);
    }

    public function render()
    {
        return view('livewire.featured-list', [
            "restaurants" => Restaurant::orderBy('rating', 'desc')->take(3)->get(),
        ]);
    }
}
