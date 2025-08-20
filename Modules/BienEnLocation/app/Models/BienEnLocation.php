<?php

namespace Modules\BienEnLocation\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\BienEnLocation\Database\Factories\BienEnLocationFactory;

class BienEnLocation extends Model
{
    use HasFactory;
    protected $table = "biens_en_location";

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['bien_id'];

    protected static function newFactory(): BienEnLocationFactory
    {
        return BienEnLocationFactory::new();
    }
}
