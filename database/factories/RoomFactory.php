<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'room_type_id' => rand(1, 50),
            'bed_type_id' => rand(1, 50),
            'room_capacity_adult' => rand(1, 5),
            'room_capacity_child' => rand(1, 5),
            'base_price' => $this->faker->randomDigit,
            'is_active' => true,
            'hotel_id' => rand(1, 50),
        ];
    }
}
