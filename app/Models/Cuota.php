<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\Prestamo;

class Cuota extends Model
{
    use HasFactory;

    public function prestamo()
    {
        return $this->belongsTo(Prestamo::class);
    }
}
