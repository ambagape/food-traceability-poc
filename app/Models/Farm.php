<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Farm extends Model
{
    use HasFactory, InteractsWithMedia;

    function party(){
        return $this->belongsTo(Party::class);
    }
}
