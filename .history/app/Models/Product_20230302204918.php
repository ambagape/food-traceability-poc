<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'production_date' => 'date',
    ];

    function party(){
        return $this->belongsTo(Party::class);
    }

    function transactions(){
        return $this->hasMany(Transaction::class);
    }

    function inputs(){
        return $this->belongsToMany(self::class, 'inputs', 'product_id', 'input_id');
    }

    function outputs(){
        return $this->belongsToMany(self::class, 'outputs', 'product_id', 'output_id');
    }
}

