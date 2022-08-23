<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tgeonim;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tgeonim>
 */
class TgeonimFactory extends Factory
{
    protected $model = Tgeonim::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'проспект'
        ];
    }
}
