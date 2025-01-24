<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'kelass' => fake() -> randomElement($array = ['10 PPLG 1', '10 PPLG 2', '10 Animasi 1', '10 Animasi 2', '10 Animasi 3', '10 Animasi 4', '10 Animasi 5', '10 DG 1', '10 DG 2', '10 TG 1', '10 TG 2', '10 TG 3','11 PPLG 1', '11 PPLG 2', '11 Animasi 1', '11 Animasi 2', '11 Animasi 3', '11 Animasi 4', '11 Animasi 5', '11 DG 1', '11 DG 2', '11 TG 1', '11 TG 2', '11 TG 3','12 PPLG 1', '12 PPLG 2', '12 Animasi 1', '12 Animasi 2', '12 Animasi 3', '12 Animasi 4', '12 Animasi 5', '12 DG 1', '12 DG 2', '12 TG 1', '12 TG 2', '12 TG 3']),
        ];
    }
}
