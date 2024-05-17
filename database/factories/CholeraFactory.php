<?php

namespace Database\Factories;

use App\Models\Cholera;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cholera>
 */
class CholeraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $provinces = ['Harare', 'Bulawayo', 'Mashonaland', 'Manicaland', 'Matabeleland', 'Midlands'];
        $cities = ['Harare', 'Bulawayo', 'Mutare', 'Gweru', 'Masvingo', 'Kwekwe'];
        $districts = ['Highfield', 'Mabvuku', 'Nkulumane', 'Sakubva', 'Sizinda', 'Gokwe'];
        $statuses = ['Confirmed', 'Suspected', 'Recovered', 'Deceased'];

        return [
            'province' => $this->faker->randomElement($provinces),
            'city' => $this->faker->randomElement($cities),
            'district' => $this->faker->randomElement($districts),
            'hospital' => $this->faker->company,
            'status' => $this->faker->randomElement($statuses),
            'age' => $this->faker->numberBetween(1, 100),
            'name' => $this->faker->name,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'lat' => $this->faker->randomFloat(6, -20.4097, -17.4097),
            'lng' => $this->faker->randomFloat(6, 31.3306, 34.3306)
        ];
    }
}
