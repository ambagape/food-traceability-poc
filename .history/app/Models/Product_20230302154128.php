<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    function party(){
        return $this->belongsTo(Party::class);
    }

    function transactions(){
        return $this->hasMany(Transaction::class);
    }

    function inputs(){
        return $this->belongsToMany(self::class)
    }
}

