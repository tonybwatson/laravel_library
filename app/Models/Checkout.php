<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = ['book_id', 'user_id', 'checkedout_condition', 'checkedin_condition', 'checkout_date', 'checkin_date', 'due_date', 'checked_out'];


    protected $table = 'checkout';
}
