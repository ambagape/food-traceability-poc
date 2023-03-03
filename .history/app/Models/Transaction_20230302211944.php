<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    function supplier()
    {
        return $this->belongsTo(Party::class, 'supplier_id');
    }

}
