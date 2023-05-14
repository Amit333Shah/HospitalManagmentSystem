<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable=[
        'appliaction_id',
        'First_name' ,
        'address' ,
        'age' ,
        'gender' ,
        'department',
        'Middle_name',
        'created_at',
        'last_name',
        'email',
        'aadhar',
        'phone_no',
        'disease',
        'city',
        'state',
        'Postal_code',
        'country',
        'Referal_type',
        'doctor_id',
        'appointment_time',
        'pay_amount',
        'hospital_type',
        'status',
        'room_no',
    ];
}
