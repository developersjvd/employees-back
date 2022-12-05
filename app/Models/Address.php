<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['street', 'ext_num', 'int_num', 'suburb', 'state', 'city'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
