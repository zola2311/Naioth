<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worships extends Model
{
    use HasFactory;
    protected $guarded=[]; // Throws fillable error if not added
}
