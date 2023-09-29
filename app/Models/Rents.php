<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rents extends Model
{
    use HasFactory;

    protected $table = 'Rents';

    protected $fillable = [
        'id_outfit',
        'id_cosplayer',
        'rental_date',
        'return_date',
        'is_return',
    ];

    public function cosplayer()
    {
        return $this->belongsTo(Cosplayer::class);
    }

    public function outfit()
    {
        return $this->belongsTo(Outfit::class);
    }
}