<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubstituTeacher extends Model
{
    use HasFactory;
    protected $table = 'substitutes';
    protected $fillable = [
        "name",
        "subject",
        "date",
        "grade"
    ];
}
