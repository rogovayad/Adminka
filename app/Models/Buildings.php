<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buildings extends Model
{
    use HasFactory;
    protected $table = 'public.buildings';
    protected $primaryKey = 'id_building_eas';
    public $timestamps = false;
    protected $guarded = [];
    protected $fillable = [
        'id_building_eas',
        'id_address_eas',
        'base_quarter_code',
        'ground_area_code',
        'building_code',
        'prim_code',
        'id_user'
    ];
}
