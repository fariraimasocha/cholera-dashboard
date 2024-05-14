<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cholera extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name',
        'hospital',
        'province',
        'district',
        'city',
        'status',
        'gender',
        'age'
        ];
}
