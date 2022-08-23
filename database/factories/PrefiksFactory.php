<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Prefiks;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prefiks>
 */
class PrefiksFactory extends Factory
{
    protected $model = Prefiks::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_town'=>1,
            'id_geonim'=>1,
            'name' => 'проспект Просвещения'
        ];
    }
}
