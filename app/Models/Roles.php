<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    const ADMIN = '1';
    const USE = '3';
    use HasFactory;
    protected $table = 'public.roles';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
    protected $fillable = [
        'id',
        'name'
    ];
}
