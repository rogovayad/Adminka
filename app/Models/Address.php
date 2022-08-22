<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = 'public.address';
    protected $primaryKey = 'id_address_eas';
    public $timestamps = false;
    protected $guarded = [];
    protected $fillable = [
        'id_address_eas',
        'id_building_eas',
        'id_raion',
        'id_okrug',
        'id_prefiks',
        'id_geonim',
        'house',
        'corpus',
        'liter',
        'villa',
        'parcel',
        'construction',
        'build_number',
        'paddress',
        'base_address_flag',
        'id_user'
    ];
}
