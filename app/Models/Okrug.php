<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Okrug extends Model
{
    use HasFactory;
    protected $table = 'public.okrug';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
    protected $fillable = [
        'id',
        'name',
        'okato',
        'oktmo'
    ];
}
