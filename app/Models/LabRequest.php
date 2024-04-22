<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabRequest extends Model
{
    use HasFactory;
    protected $table = 'labrequests';
    protected $fillable = [
        'fullName',
        'lastName',
        'test_result',
        'birthday',
        'lab_choice',
        'email',
        'phone',
    ];
}
