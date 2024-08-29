<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerReview extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $table = 'customer_reviews';

    protected $fillable = ['name', 'email', 'productId', 'productType', 'score', 'comment'];
}
