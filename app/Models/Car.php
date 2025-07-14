<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /**
     * I campi che possono essere assegnati in massa (mass assignment).
     *
     * Questo è necessario per usare Car::create($data)
     */
    protected $fillable = [
        'make',
        'model',
        'produced_on',
    ];

    /**
     * Cast automatico dei tipi (opzionale ma utile).
     * Laravel converte automaticamente le date.
     */
    protected $casts = [
        'produced_on' => 'date',
    ];
}
