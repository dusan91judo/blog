<?php

namespace App\Models;

use App\Models\Skola;
use Illuminate\Database\Eloquent\Model;

class Dogadjaj extends Model
{
    protected $table = 'dogadjaji';

    public function skola()
    {
        return $this->belongsTo(Skola::class);
    }
}
