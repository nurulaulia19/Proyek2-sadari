<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultQuisioner extends Model
{
    use HasFactory;
    protected $table = 'Result_Quisioner';
    protected $guarded = ['id'];
}
