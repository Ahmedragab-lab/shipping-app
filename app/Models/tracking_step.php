<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tracking_step extends Model
{
    protected $fillable = [
        'id',
        'order_no',
        'step1',
        'step2',
        'step3',
        'step4',
        'date',
        
    ];
}
