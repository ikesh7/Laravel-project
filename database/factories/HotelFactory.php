<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

class HotelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hotel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name;
        return [
            'property_type_id' => rand(1, 3),
            'name_of_property' => $name,
            'slug' => Str::slug($name),
            'details' => $this->faker->text,
            'star_rating' => rand(1, 5),
            'contact_name' => $this->faker->name,
            'contact_no' => $this->faker->phoneNumber,
            'user_id' => rand(1, 50),
            'address' => $this->faker->address,
            'city_id' => rand(1, 2),
            'is_active' => true,
            'verified_by' => 1,
            'verified_at' => now(),
            'user_id' => rand(1, 50),
            'lat' => $this->faker->latitude,
            'long' => $this->faker->longitude,
            'image' => 'https://picsum.photos/300/300',
        ];
    }
}
