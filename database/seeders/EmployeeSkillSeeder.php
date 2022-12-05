<?php

namespace Database\Seeders;

use App\Models\EmployeeSkill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSkillSeeder extends Seeder
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
                'employee_id' => 1,
                'skill_id' => 1,
            ],
            [
                'employee_id' => 1,
                'skill_id' => 2,
            ],
            [
                'employee_id' => 2,
                'skill_id' => 1,
            ],
            [
                'employee_id' => 2,
                'skill_id' => 2,
            ],
            [
                'employee_id' => 2,
                'skill_id' => 3,
            ],
            [
                'employee_id' => 2,
                'skill_id' => 4,
            ],
        ];

        EmployeeSkill::insert($data);
    }
}
