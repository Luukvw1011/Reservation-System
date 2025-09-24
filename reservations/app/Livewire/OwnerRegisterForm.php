<?php

namespace App\Livewire;

use App\Enums\SubmissionStatus;
use App\Livewire\Forms\OwnerRegisterFormObject;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OwnerRegisterForm extends Component
{
    public OwnerRegisterFormObject $form;

    public int $step = 0;

    /**
     * Each wizard step is described by its label, partial and the form fields it covers.
     *
     * @var array<int, array<string, mixed>>
     */
    public array $steps = [
        [
            'label' => 'Owner information',
            'component' => 'livewire.auth.partials.owner-register-contact',
            'fields' => ['contact_email', 'contact_phone'],
        ],
        [
            'label' => 'Restaurant information',
            'component' => 'livewire.auth.partials.owner-register-restaurant',
            'fields' => ['restaurant_name', 'restaurant_type', 'city'],
        ],
        [
            'label' => "Restaurant extra's",
            'component' => 'livewire.auth.partials.owner-register-extras',
            'fields' => ['website', 'message', 'accept_terms'],
        ],
    ];

    /**
     * Simple set of cuisine types the owner can select from.
     *
     * @var list<string>
     */
    public array $cuisineOptions = [
        'American',
        'Bakery',
        'Barbecue',
        'Cafe',
        'Chinese',
        'French',
        'Greek',
        'Indian',
        'Italian',
        'Japanese',
        'Mediterranean',
        'Mexican',
        'Seafood',
        'Steakhouse',
        'Thai',
        'Vegan',
    ];

    public string $successMessage = '';

    public bool $submitted = false;

    public function nextStep(): void
    {
        if ($this->step >= count($this->steps) - 1) {
            $this->submit();

            return;
        }

        $this->validateStep($this->step);

        $this->step++;
        $this->resetErrorBag();
    }

    public function previousStep(): void
    {
        if ($this->step <= 0) {
            return;
        }

        $this->step--;
        $this->resetErrorBag();
    }

    public function submit(): void
    {
        $this->form->validate();

        $this->updateUserInfo();
        $this->submitRestaurantInfo();

        $this->resetErrorBag();
        $this->form->reset();

        $this->step = 0;
        $this->successMessage = __('Thanks! Our partnerships team will reach out soon.');
        $this->submitted = true;
    }

    protected function validateStep(int $step): void
    {
        $fields = $this->steps[$step]['fields'] ?? [];

        if ($fields === []) {
            return;
        }

        $rules = $this->form->rules();
        $stepRules = [];

        foreach ($fields as $field) {
            if (isset($rules[$field])) {
                $stepRules["form.$field"] = $rules[$field];
            }
        }

        if ($stepRules !== []) {
            $this->validate($stepRules);
        }
    }

    public function updateUserInfo(): void {
        $currentUser = Auth::user();
        $currentUser->owner_since = now();

        $currentUser->save();
    }

    public function submitRestaurantInfo(): void {
        Restaurant::create([
            'title' => $this->form->restaurant_name,
            'type' => $this->form->restaurant_type,
            'status' => SubmissionStatus::STATUS_PENDING,
            'owner_user_id' => Auth::id(),
            'city' => $this->form->city,
            'contact_email' => $this->form->contact_email,
            'contact_phone' => $this->form->contact_phone,
            'website' => $this->form->website,
            'notes' => '',
        ]);
    }

    public function render()
    {
        return view('livewire.auth.owner-register-form');
    }
}
