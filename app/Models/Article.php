<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'title',
        'text'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
