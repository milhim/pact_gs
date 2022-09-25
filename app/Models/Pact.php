<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Pact extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    public $translatedAttributes = [
        'type',
        'model',
        'accessoar',
        'noteOne',
        'noteTwo',
        'status',
    ];
    protected $fillable = [
        'serial_number',

    ];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
