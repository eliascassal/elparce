<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cuota;

class Pago extends Model
{
    use HasFactory;

    public function cuota()
    {
        return $this->hasOne(Cuota::class);
    }
}
