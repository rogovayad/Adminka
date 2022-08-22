<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Raion;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Raion>
 */
class RaionFactory extends Factory
{
    protected $model = Raion::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'Калининский',
            'okato'=>'40273000000'
        ];
    }
}
