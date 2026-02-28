<?php

namespace App\Livewire;

use Livewire\Component;

class TodaysReservationsCard extends Component
{
    public ?string $reservationPercentage = null;

    public function render()
    {
        return view('livewire.todays-reservations-card', [
            'displayReservationPercentage' => $this->resolvedPercentage($this->reservationPercentage),
        ]);
    }

    private function resolvedPercentage(?string $value): string
    {
        return blank($value) ? 'No data' : $value;
    }
}
