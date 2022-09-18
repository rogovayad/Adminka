<?php

namespace Tests\DataGenerators;

use App\Models\User;

trait UserGenerator
{
    public function GenerateUser($data=[])
    {
        Return User::factory()->create($data);
    }
}
