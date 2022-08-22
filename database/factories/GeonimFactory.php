<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Geonim;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Geonim>
 */
class GeonimFactory extends Factory
{
    protected $model = Geonim::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type'=>1,
            'name'=>'Просвещения'
        ];
    }
}
