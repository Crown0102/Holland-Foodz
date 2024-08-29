<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chief extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'chiefs';

    protected $fillable = ['avatar', 'name', 'roll'];
}
