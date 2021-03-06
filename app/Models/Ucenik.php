<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ucenik extends Model
{
    protected $table = 'ucenici';

    public function skola()
    {
        return $this->belongsTo(Skola::class);
    }
}
