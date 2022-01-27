<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // return [
        //     'nama' => $this->faker->name(),
        //     'email' => $this->faker->unique()->safeEmail(),
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('admin'),
        //     'gambar' => 'superadmin.jpg',
        //     'role' => 'superadmin',
        // ];
        return [
            'nama' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('mitra'),
            'gambar' => 'mitra.jpg',
            'role' => 'mitra',
        ];
    }
}
