<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boleto extends Model
{
    use HasFactory;
    public $timestamps = false;

    public $guarded = ["pasajero_id"];

    /** UN BOLETO LE PERTENECE A UN PASAJERO */
    public function pasajero()
    {
        return $this->belongsTo(Pasajero::class,"pasajero_id","id_pasajero");
    }
}
