<?php

namespace Database\Factories;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    protected $model = Profile::class;

    public function definition()
    {
        return [
            'bio' => $this->faker->text(),
            'school' => $this->faker->company(),
            'user_id' => User::factory(),
        ];
    }
}
