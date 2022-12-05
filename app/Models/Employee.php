<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'last_name', 'email', 'birthday', 'address_id'];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'employee_skills');
    }
}
