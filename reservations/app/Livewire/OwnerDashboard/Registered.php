<?php

namespace App\Livewire\OwnerDashboard;

use App\Enums\SubmissionStatus;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Registered extends Component
{
    private const FALLBACK_BADGE_CLASSES = 'bg-stone-800 text-stone-200 ring-stone-700';

    private const STATUS_BADGE_CLASSES = [
        SubmissionStatus::STATUS_PENDING->value => 'bg-amber-900/60 text-amber-300 ring-amber-700/60',
        SubmissionStatus::STATUS_APPROVED->value => 'bg-emerald-900/60 text-emerald-300 ring-emerald-700/60',
        SubmissionStatus::STATUS_REJECTED->value => 'bg-rose-900/60 text-rose-300 ring-rose-700/60',
    ];

    public function render()
    {
        $restaurants = Restaurant::query()
            ->where('owner_user_id', Auth::id())
            ->take(3)
            ->get()
            ->map(function (Restaurant $restaurant): array {
                return [
                    'id' => $restaurant->id,
                    'title' => $restaurant->title,
                    'city' => $restaurant->city,
                    'type' => $restaurant->type,
                    'votes' => $restaurant->votes,
                    'status' => $restaurant->status,
                    'status_label' => $this->statusLabel($restaurant->status),
                    'status_badge_classes' => $this->statusBadgeClasses($restaurant->status),
                ];
            });

        return view('livewire.owner-dashboard.registered', [
            'restaurants' => $restaurants,
        ]);
    }

    private function statusLabel(string $status): string
    {
        return ucfirst($status);
    }

    private function statusBadgeClasses(string $status): string
    {
        return self::STATUS_BADGE_CLASSES[$status] ?? self::FALLBACK_BADGE_CLASSES;
    }
}
