<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar_keluhan extends Model
{
    use HasFactory;
    protected $table = 'Daftar_keluhan';
    protected $guarded = ['id'];
}
