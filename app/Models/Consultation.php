<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
         protected $guarded = [];

     protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {

            $lastRecord = self::latest('id')->first();

            if (!$lastRecord) {
                $number = 1;
            } else {
                $lastNumber = (int) substr($lastRecord->name, 2);
                $number = $lastNumber + 1;
            }

            $model->name = 'C' . str_pad($number, 3, '0', STR_PAD_LEFT);
        });

    }
}
