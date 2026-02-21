<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];

    function visits() {
        return $this->hasMany(Visit::class);
    }

}
