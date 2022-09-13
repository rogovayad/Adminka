<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Address;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    protected $model = Address::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_building_eas'=>2,
            'id_raion'=>2,
            'id_okrug'=>1,
            'id_prefiks'=>1,
            'id_geonim'=>1,
            'house'=>'20/25',
            'corpus'=>'',
            'liter'=>'Б',
            'villa'=>'',
            'parcel'=>'',
            'construction'=>'',
            'build_number'=>'',
            'paddress'=>'г.Санкт-Петербург, проспект Просвещения, дом 20/25, литера Б',
            'base_address_flag'=>'Y',
            'id_user'=>2
        ];
    }
}

