<?php

namespace App\Livewire;

use Livewire\Component;

class FeaturedList extends Component
{
    public array $restaurantObject = [];
    public function render()
    {
        $this->restaurantObject[] = [
            "title" => "The gilded spoon",
            "type" => "Ice cream shop",
            "rating" => "4.1",
            "votes" => "1.2",
        ];

        $this->restaurantObject[] = [
            "title" => "Chinese wall",
            "type" => "Eastern food",
            "rating" => "3.2",
            "votes" => "1.2",
        ];

        $this->restaurantObject[] = [
            "title" => "Chinese wall",
            "type" => "Eastern food",
            "rating" => "3.2",
            "votes" => "1.2",
        ];

        return view('livewire.featured-list', [
            "restaurants" => $this->restaurantObject
        ]);
    }
}
