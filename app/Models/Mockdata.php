<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mockdata extends Model
{
    use HasFactory;

    protected $table = 'mockup';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'gender'
    ];
}
