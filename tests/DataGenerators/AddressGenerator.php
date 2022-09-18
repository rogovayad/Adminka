<?php

namespace Tests\DataGenerators;

use App\Models\Address;
use App\Models\Users;
use App\Models\Bproperties;
use App\Models\Buildings;
use App\Models\Geonim;
use App\Models\Okrug;
use App\Models\Prefiks;
use App\Models\Properties;
use App\Models\Raion;
use App\Models\Roles;
use App\Models\Tgeonim;
use App\Models\Town;

trait AddressGenerator
{
    public function GenerateAddresses()
    {
        Roles::factory()->create();
        Users::factory()->create();
        Raion::factory()->create();
        Okrug::factory()->create();
        Town::factory()->create();
        Tgeonim::factory()->create();
        Geonim::factory()->create();
        Prefiks::factory()->create();
        Buildings::factory()->create();
        Properties::factory()->create();
        Bproperties::factory()->create();
        Address::factory()->create();
    }
}
