<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bproperties extends Model
{
    use HasFactory;
    protected $table = 'public.bproperties';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
    protected $fillable = [
        'id',
        'id_building_eas',
        'id_properties',
        'name',
        'id_user'
    ];
}
