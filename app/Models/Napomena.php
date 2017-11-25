<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Napomena extends Model
{
    protected $table = 'napomene';

    public function skola()
    {
        return $this->belongsTo(Skola::class);
    }
}
