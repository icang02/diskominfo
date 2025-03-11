<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class EmployeeFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'name'          => $this->faker->name,
      'nip'           => mt_rand(100000, 999999) . mt_rand(100000, 999999) . mt_rand(100000, 999999),
      'date_of_birth' => $this->faker->dateTimeBetween('-65 years', '-18 years')->format('Y-m-d'),
      'address'       => $this->faker->address,
      'gender'        => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
      'position_id'   => $this->faker->numberBetween(1, 14),
    ];
  }
}
