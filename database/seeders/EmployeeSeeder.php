<?php

namespace Database\Seeders;

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'email' => fake()->unique()->safeEmail(),
                'birthday' => Carbon::now()->subYear(random_int(15, 20)),
                'address_id' => random_int(1, 5),
            ],
            [
                'name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'email' => fake()->unique()->safeEmail(),
                'birthday' => Carbon::now()->subYear(random_int(15, 20)),
                'address_id' => random_int(1, 5),
            ],
            [
                'name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'email' => fake()->unique()->safeEmail(),
                'birthday' => Carbon::now()->subYear(random_int(15, 20)),
                'address_id' => random_int(1, 5),
            ],
            [
                'name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'email' => fake()->unique()->safeEmail(),
                'birthday' => Carbon::now()->subYear(random_int(15, 20)),
                'address_id' => random_int(1, 5),
            ],
        ];

        Employee::insert($data);
    }
}
