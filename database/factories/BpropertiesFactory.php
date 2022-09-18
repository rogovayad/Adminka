<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Bproperties;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bproperties>
 */
class BpropertiesFactory extends Factory
{
    protected $model = Bproperties::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_building_eas'=>2,
            'id_properties'=>1,
            'name'=>'195297',
            'id_user'=>2
        ];
    }
}
