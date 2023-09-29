<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cosplayer extends Model
{
    use HasFactory;

    protected $table = 'cosplayer';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];

    public function outfits()
    {
        return $this->hasMany(Outfit::class);
    }

    public function rents()
    {
        return $this->hasMany(Rent::class);
    }
}