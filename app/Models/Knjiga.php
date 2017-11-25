<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Knjiga extends Model
{
    protected $table = 'knjige';

    public function biblioteka()
    {
        return $this->belongsTo(Biblioteka::class);
    }
}
