<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RxRefill extends Model
{
    use HasFactory;
    protected $table = 'rxrefills';
    protected $fillable = [
        'fullName',
        'lastName',
        'birthday',
        'pharmacy_name',
        'country',
        'address_first',
        'address_second',
        'city',
        'state',
        'zip',
        'medication',
        'supplies',
    ];
}
