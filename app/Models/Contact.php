<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded=[
        'id',
    ];

    public $timestamps=false;

    protected $casts = [
        'received_at'=>'datetime',
    ];
}
