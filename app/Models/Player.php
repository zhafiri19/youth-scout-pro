<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    // Nama tabel di database (opsional jika sama dengan nama model plural)
    protected $table = 'players';

    // Field yang boleh diisi via mass-assignment
    protected $fillable = [
        'name',
        'birth_date',
        'position',
        'height',
        'weight',
        'club',
        'status',
        'notes',
    ];

    // Cast untuk konversi otomatis tipe data
    protected $casts = [
        'birth_date' => 'date',
    ];
}
