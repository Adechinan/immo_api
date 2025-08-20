<?php

namespace Modules\Bien\Models;

use Modules\Tof\Models\Tof;
use Illuminate\Database\Eloquent\Model;
use Modules\BienEnVente\Models\BienEnVente;
use Modules\Bien\Database\Factories\BienFactory;
use Modules\BienEnLocation\Models\BienEnLocation;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Bien extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'titre',
        'description',
        'surface',
        'pieces',
        'chambres',
        'etage',
        'ville',
        'adresse',
        'vendre',
        'disponible',
        'prix',
        'user_id'
    ];

    protected static function newFactory(): BienFactory
    {
         return BienFactory::new();
    }

    public function location(){
        return $this->hasOne(BienEnLocation::class);
    }

    public function vente(){
        return $this->hasOne(BienEnVente::class);
    }

    public function scopeDisponible($query){
        return $query->where('disponible', true);
    }

    public function scopeAvendre($query){
        return $query->where('vendre', true);
    }

    public function scopeAlouer($query){
        return $query->where('vendre', false);
    }

    public function scopeLatest($query){
        return $query->where('created_at', 'desc');
    }

    public function tofs(){
        return $this->hasMany(Tof::class);
    }
}
