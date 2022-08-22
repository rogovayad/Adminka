<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tgeonim extends Model
{
    use HasFactory;
    protected $table = 'public.tgeonim';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
    protected $fillable = [
        'id',
        'name'
    ];
}
