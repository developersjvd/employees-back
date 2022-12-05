<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{

    /**
     * Create a random color
     * 
     * @return random color
     */
    public function randomHex() {
        $chars = 'ABCDEF0123456789';
        $color = '#';
        for ( $i = 0; $i < 6; $i++ ) {
           $color .= $chars[rand(0, strlen($chars) - 1)];
        }
        return $color;
     }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'PHP',
                'color' => $this->randomHex()
            ],
            [
                'name' => 'Laravel',
                'color' => $this->randomHex()
            ],
            [
                'name' => 'Nest',
                'color' => $this->randomHex()
            ],
            [
                'name' => 'Sqlite',
                'color' => $this->randomHex()
            ],
        ];

        Skill::insert($data);
    }
}
