<?php

namespace Modules\BienEnVente\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\BienEnVente\Database\Factories\BienEnVenteFactory;
// use Modules\BienEnVente\Database\Factories\BienEnVenteFactory;

class BienEnVente extends Model
{
    use HasFactory;
    protected $table = "biens_en_vente";

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['bien_id'];

    protected static function newFactory(): BienEnVenteFactory
    {
        return BienEnVenteFactory::new();
    }
}
