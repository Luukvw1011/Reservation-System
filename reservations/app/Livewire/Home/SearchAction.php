<?php

namespace App\Livewire\Home;

use Livewire\Component;

class SearchAction extends Component
{
    public string $searchInput = "";

    public function submit()
    {
        // fire event when button is pressed
        $this->dispatch('restaurantSearchUpdated', $this->searchInput);
    }

    public function render()
    {
        return view('livewire.home.search-action');
    }
}
