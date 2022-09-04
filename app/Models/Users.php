<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'public.users';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
    protected $fillable = [
        'id',
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'id_role'
    ];
    protected $hidden = [
        'password',
        'remember_token',
        'id_role'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
