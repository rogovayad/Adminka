<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return[
             'id_address_eas'=>$this->id_address_eas,
             'id_building_eas'=>$this->id_building_eas,
             'id_raion'=>$this->id_raion,
             'id_okrug'=>$this->id_okrug,
             'id_prefiks'=>$this->id_prefiks,
             'id_geonim'=>$this->id_geonim,
             'house'=>$this->house,
             'corpus'=>$this->corpus,
             'liter'=>$this->liter,
             'villa'=>$this->villa,
             'parcel'=>$this->parcel,
             'construction'=>$this->construction,
             'build_number'=>$this->build_number,
             'paddress'=>$this->paddress,
             'base_address_flag'=>$this->base_address_flag,
             'id_user'=>$this->id_user,
        ];
    }
}
