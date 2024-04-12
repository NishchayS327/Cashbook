<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = ['full_name', 'bank_name','account_number','method_of_pay','amount','transaction_type','status'];
}
