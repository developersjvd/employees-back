<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
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
                'street' => fake()->streetAddress(),
                'ext_num' => fake()->buildingNumber(),
                'int_num' => fake()->buildingNumber(),
                'suburb' => fake()->secondaryAddress(),
                'state' => fake()->state(),
                'city' => fake()->city()
            ],
            [
                'street' => fake()->streetAddress(),
                'ext_num' => fake()->buildingNumber(),
                'int_num' => fake()->buildingNumber(),
                'suburb' => fake()->secondaryAddress(),
                'state' => fake()->state(),
                'city' => fake()->city()
            ],
            [
                'street' => fake()->streetAddress(),
                'ext_num' => fake()->buildingNumber(),
                'int_num' => fake()->buildingNumber(),
                'suburb' => fake()->secondaryAddress(),
                'state' => fake()->state(),
                'city' => fake()->city()
            ],
            [
                'street' => fake()->streetAddress(),
                'ext_num' => fake()->buildingNumber(),
                'int_num' => fake()->buildingNumber(),
                'suburb' => fake()->secondaryAddress(),
                'state' => fake()->state(),
                'city' => fake()->city()
            ],
            [
                'street' => fake()->streetAddress(),
                'ext_num' => fake()->buildingNumber(),
                'int_num' => fake()->buildingNumber(),
                'suburb' => fake()->secondaryAddress(),
                'state' => fake()->state(),
                'city' => fake()->city()
            ],
        ];
        Address::insert($data);
    }
}
