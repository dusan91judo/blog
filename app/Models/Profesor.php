<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesori';

    public function skola()
    {
        return $this->belongsTo(Skola::class);
    }
}
