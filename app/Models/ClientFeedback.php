<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientFeedback extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function client(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function serv(){
        return $this->belongsTo(Service::class,'serv_id');
    }
}
