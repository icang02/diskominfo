<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    $title = $this->faker->sentence();

    // Generate konten HTML
    $content = '<p>' . $this->faker->paragraph() . '</p>';
    $content .= '<p>' . $this->faker->paragraph() . '</p>';
    $content .= '<ul>';
    for ($i = 0; $i < rand(3, 10); $i++) {
      $content .= '<li>' . $this->faker->sentence() . '</li>';
    }
    $content .= '</ul>';
    $content .= '<p>' . $this->faker->paragraph() . '</p>';

    return [
    'title'       => $title,
    'slug'        => str()->slug($title),
    'image'       => 'https://picsum.photos/640/480?random=' . $this->faker->numberBetween(1, 1000),
    'content'     => $content,
    'category_id' => $this->faker->numberBetween(1, 9),
    'created_at'  => $this->faker->dateTimeBetween('-1 year', 'now'),
    'updated_at'  => $this->faker->dateTimeBetween('-1 year', 'now'),
    ];
  }
}
