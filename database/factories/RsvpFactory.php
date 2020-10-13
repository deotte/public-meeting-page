<?php

namespace Database\Factories;

use App\Models\Rsvp;
use App\Models\Meeting;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RsvpFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rsvp::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $options = ['Yes', 'No', 'Maybe'];

        return [
          'email' => $this->faker->email,
          'meeting_id' => Meeting::all()->random()->id,
          'name' => $this->faker->name,
          'response' => $this->faker->randomElement($options)
        ];
    }
}
