<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SslPayment extends Model
{
    use HasFactory;
    protected $table = 'ssl_payments';

    protected $guarded = ['created_at','updated_at'];
}
