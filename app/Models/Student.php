<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    use HasFactory;

    public function phone(){
        return $this->belongsTo(Phone::class);
    }

    public function subjects(){
        return $this->belongsToMany(Subject::class);
    }
}
