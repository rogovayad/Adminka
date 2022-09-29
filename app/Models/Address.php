<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Watson\Rememberable\Rememberable;
use Illuminate\Support\Facades\Cache;

class Address extends Model
{
    use HasFactory,Rememberable;

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

    static public function getCacheKey(int $id_address_eas):string{
        return 'address_'.$id_address_eas;
    }
    static public function getCachedAll ():string{
        Cache::store('memcached')->put('address',Address::all(),600);
        return 'ok';
    }
    protected static function booted(){
        static::created(function ($address){
            Cache::get(static::getCacheKey($address->id_address_eas),$address,600);
        });
        static::updated(function ($address){
            Cache::put(static::getCacheKey($address->id_address_eas),$address,600);
        });
        static::deleted(function ($address){
            Cache::forget(static::getCacheKey($address->id_address_eas));
        });
    }
}
