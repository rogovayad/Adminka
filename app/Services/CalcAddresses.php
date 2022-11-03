<?php

namespace App\Services;

use Illuminate\Support\Collection;

class CalcAddresses
{
    public function calc(Collection $addresses):array
    {
        sleep(5);
        return $addresses->groupBy('id_address_eas')
        ->map(function(Collection $idaddresses){
           return [$idaddresses->first->id_address_eas,
               $idaddresses->map->amount->sum()];
        })->values()->toArray();
    }

}
