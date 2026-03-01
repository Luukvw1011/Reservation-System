<?php

namespace App\Livewire;

use Livewire\Component;

class OccupancyCard extends Component
{
    public ?string $occupancyPercentage = null;

    public function render()
    {
        return view('livewire.occupancy-card', [
            'displayOccupancyPercentage' => $this->resolvedPercentage($this->occupancyPercentage),
        ]);
    }

    private function resolvedPercentage(?string $value): string
    {
        return blank($value) ? 'No data' : $value;
    }
}
