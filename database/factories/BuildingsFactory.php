<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Buildings;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buildings>
 */
class BuildingsFactory extends Factory
{
    protected $model = Buildings::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_address_eas'=>2,
            'base_quarter_code'=>'5505',
            'ground_area_code'=>18,
            'building_code'=>1,
            'prim_code'=>10,
            'id_user'=>2
        ];
    }
}
