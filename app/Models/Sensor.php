<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'occupied',
        'start_time',
        'end_time',
        'user_id',
    ];

    /**
     * Relación con el modelo User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación con el modelo Reservation.
     * Un sensor puede tener muchas reservas.
     */
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
