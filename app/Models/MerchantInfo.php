<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerchantInfo extends Model
{
    protected $table = 'merchant_informations';
    public $timestamps = true;
    use HasFactory;
}
