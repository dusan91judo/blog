<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biblioteka extends Model
{
    protected $table = 'biblioteke';

    public function knjige()
    {
        return $this->hasMany(Knjiga::class);
    }
}
