<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Acreedor;
use App\Models\Deudor;
use App\Models\Cuota;

class Prestamo extends Model
{
    use HasFactory;

    public function deudor()
    {
        return $this->hasOne(Deudor::class);
    }

    public function acreedor()
    {
        return $this->hasOne(Acreedor::class);
    }

    public function cuota()
    {
        return $this->hasMany(Cuota::class);
    }
}
