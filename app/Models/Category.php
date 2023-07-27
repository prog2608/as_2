<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    protected static function booted()
    {
        static::saving(function ($obj){
            $obj->slug = str()->slug($obj->name_tm);
        });
    }

    public function products()
    {
        return $this->hasMany(Product::class)
            ->orderBy('id', 'desc');
    }

    public function getName()
    {
        $Locale = app()->getLocale();
        switch($Locale) {
            case 'tm':
                return $this->name_tm;
                break;
            case 'en':
                return $this->name_en ?: $this->name_tm;
                break;
            default:
                return $this->name_tm;
        }
    }
}
