<?php

namespace Database\Factories;

use App\Enums\SubmissionStatus;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Restaurant>
 */
class RestaurantFactory extends Factory
{
    protected $model = Restaurant::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images = [
            "https://images.unsplash.com/photo-1667388969250-1c7220bf3f37?q=80&w=3010&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1728501650832-57bafbf10a37?q=80&w=685&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1670819917685-f1040e76b9b7?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1667388968964-4aa652df0a9b?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        ];

        $types = [
            'Italian', 'Chinese', 'Indian', 'Mexican', 'American', 'Thai',
            'Japanese', 'Mediterranean', 'Vegan', 'Bakery', 'Cafe', 'BBQ', 'Seafood',
        ];

        return [
            'title' => $this->faker->unique()->company(),
            'type' => $this->faker->randomElement($types),
            'status' => SubmissionStatus::STATUS_PENDING,
            'owner_user_id' => null,
            'city' => $this->faker->city(),
            'contact_email' => $this->faker->safeEmail(),
            'contact_phone' => $this->faker->optional()->phoneNumber(),
            'website' => $this->faker->optional()->url(),
            'notes' => $this->faker->optional()->paragraph(),
            'rating' => $this->faker->numberBetween(10, 50) / 10,
            'votes' => $this->faker->numberBetween(0, 5000),
            'image' => $this->faker->randomElement($images),
        ];
    }
}
