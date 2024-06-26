<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForms extends Model
{
    use HasFactory;
    protected $table = 'contactforms';
    protected $fillable = [
        'fullName',
        'lastName',
        'email',
        'message',
    ];
}
