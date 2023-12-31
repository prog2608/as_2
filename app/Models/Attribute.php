<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    public function values()
    {
        return $this->.hasMany(AttributeValue::class);
    }

}

