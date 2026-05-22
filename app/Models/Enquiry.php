<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    protected $table = 'enquiry_form';

    protected $fillable = [
        'school_name',
        'contact_person',
        'contact_number',
        'email',
        'address',
        'city',
        'message',
    ];
}