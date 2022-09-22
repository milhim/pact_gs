<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pact extends Model
{
    use HasFactory;
    protected $fillable = [
        'serial_number',
        'type',
        'model',
        'accessoar',
        'noteOne',
        'noteTwo',
        'status',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
