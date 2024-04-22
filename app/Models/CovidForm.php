<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidForm extends Model
{
    use HasFactory;
    protected $table = 'covidforms';
    protected $fillable = [
        'fullName',
        'lastName',
        'birthday',
        'categories',
        'physical_contact',
        'isolate_detail',
        'test_result',
    ];
}
