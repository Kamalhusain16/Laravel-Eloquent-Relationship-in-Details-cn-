<?php

namespace App\Models;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
    ];

    public function Profile(){

        return $this->hasOne(Profile::class);
    }

    public function comments (){

        return $this->hasMany(comment::class);
    }
    public function subjects(){
        return $this->belongsToMany(Subject::class);
    }
    
}
