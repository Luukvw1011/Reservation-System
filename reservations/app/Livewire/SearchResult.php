<?php

namespace App\Livewire;

use App\Models\Restaurant;
use Livewire\Component;
use Livewire\WithPagination;

class SearchResult extends Component
{
    use WithPagination;

    public $search = "";
    protected $listeners = ['restaurantSearchUpdated' => 'setSearch'];

    public function setSearch($term) {
        $this->search = $term;
        $this->resetPage();
    }

    public function render()
    {
        $restaurants = Restaurant::query()
            ->when($this->search, function ($query) {
                $query->where('title', 'like', "%{$this->search}%");
            })
            ->orderBy('rating', 'desc')
            ->paginate(10);

        return view('livewire.search-result', [
            'restaurants' => $restaurants,
        ]);
    }
}
