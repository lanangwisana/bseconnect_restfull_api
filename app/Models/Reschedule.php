<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reschedule extends Model
{
    use HasFactory;
    protected $table = 'reschedules';
    protected $fillable = [
        "name",
        "subject",
        "date",
        "topic",
        "grade",
        "room",
        "reason"
    ];
}
