<?php

namespace Modules\Tof\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Tof\Database\Factories\TofFactory;

class Tof extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['url', 'bien_id'];

    // protected static function newFactory(): TofFactory
    // {
    //     // return TofFactory::new();
    // }
}
