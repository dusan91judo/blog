<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skola extends Model
{
    protected $table = 'skole';

    public function napomene()
    {
        return $this->hasMany(Napomena::class);
    }

    public function dogadjaj()
    {
        return $this->hasOne(Dogadjaj::class);
    }
}
