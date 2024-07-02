<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasajero extends Model /// id
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = "id_pasajero";

    /// fillable
   

    /**
     * PASAJERO SE LE EMITE UN BOLETO
     */
    public function boleto()
    {
        /// hasOne
        /**
         * PK = id_psajero
         * FK => pasajero_id
         */
        return $this->hasOne(Boleto::class,"pasajero_id","id_pasajero");
    }
}
