<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Okrug;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Okrug>
 */
class OkrugFactory extends Factory
{
    protected $model = Okrug::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'муниципальный округ Шувалово-Озерки',
            'okato'=>'40265566000',
            'oktmo'=>'40319000'
        ];
    }
}
