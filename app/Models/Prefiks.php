<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefiks extends Model
{
    use HasFactory;
    protected $table = 'public.prefiks';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
    protected $fillable = [
        'id',
        'id_town',
        'id_geonim',
        'name'
    ];
}
