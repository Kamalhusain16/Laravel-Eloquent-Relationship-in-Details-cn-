<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [

        'email',
        'address',
        'phone_number',

    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
