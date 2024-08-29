<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesPoint extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'salespoints_table';

    protected $fillable = ['title', 'position', 'owner'];
}
