<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dummy extends Model
{
    use HasFactory;

    protected $table = 'dummies';
    protected $filable = ['firstname','secondname','email','phone'];
    protected $hidden = ['created_at','updated_at'];
}
