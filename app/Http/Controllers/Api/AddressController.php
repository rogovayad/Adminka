<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AddressResource;
use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Validator;

class AddressController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Address $address)
    {
        $address = Address::all();
        return AddressResource::collection($address);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $address = Validator::make($request->all(), [
            'id_address_eas' => 'required',
            'id_building_eas' => 'required',
            'id_raion'=> 'required',
            'id_okrug'=> 'required',
            'id_prefiks'=> 'required',
            'id_geonim'=> 'required',
            'paddress' => 'required',
            'base_address_flag'=> 'required',
            'id_user'=> 'required',
        ]);

        if ($address->fails()) {
            return $this->errorResponse('Error validation.', $address->errors());
        }

        return $this->successResponse('Address successfully created.', new AddressResource(
            Address::create($address->validated())
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        return new AddressResource($address);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        $addresses = Validator::make($request->all(), [
            'id_address_eas' => 'required',
            'id_building_eas' => 'required',
            'id_raion'=> 'required',
            'id_okrug'=> 'required',
            'id_prefiks'=> 'required',
            'id_geonim'=> 'required',
            'paddress' => 'required',
            'base_address_flag'=> 'required',
            'id_user'=> 'required',
        ]);

        if($addresses->fails()){
            return $this->errorResponse('Error validation11.', $addresses->errors());
        }

       $input = $addresses->validated();

        $address->id_address_eas = $input['id_address_eas'];
        $address->id_building_eas = $input['id_building_eas'];
        $address->id_raion = $input['id_raion'];
        $address->id_okrug = $input['id_okrug'];
        $address->id_prefiks = $input['id_prefiks'];
        $address->id_geonim = $input['id_geonim'];
        $address->paddress = $input['paddress'];
        $address->base_address_flag = $input['base_address_flag'];
        $address->id_user = $input['id_user'];
        $address->save();

        return $this->successResponse('Address successfully updated.', new AddressResource($address));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_address_eas)
    {
        $address = Address::find($id_address_eas);

        if (is_null($address)) {
            return $this->errorResponse('Address does not exist.');
        }

        $address->delete();
        return $this->successResponse('Address successfully deleted.');
    }
}
