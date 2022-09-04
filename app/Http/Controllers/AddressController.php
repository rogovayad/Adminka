<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address = Address::all();
        return view::make('address.index')->with('address', $address);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->cannot('create',Address::class))
            Abort(403);
        return view('address.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($request,[
            'id_address_eas'=>'required',
             'id_building_eas'=>'required',
            'id_raion'=>'required',
            'id_okrug'=>'required',
            'id_prefiks'=>'required',
            'id_geonim'=>'required',
            'house'=>'required',
            'corpus'=>'required',
            'liter'=>'required',
            'villa'=>'required',
            'parcel'=>'required',
            'construction'=>'required',
            'build_number'=>'required',
            'paddress'=>'required',
            'base_address_flag'=>'required',
            'id_user'=>'required',
        ]);

        Address::create($request->all());
        return redirect()->route('address.index')->with('success','address created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        // show the view and pass the shark to it
        return view('address.show',compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        if (Auth::user()->cannot('update',Address::class))
            Abort(403);
        return view('address.edit',compact('address'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        if (Auth::user()->cannot('update',Address::class))
            Abort(403);
        $request->validate([
            'id_address_eas'=>'required',
            'id_building_eas'=>'required',
            'id_raion'=>'required',
            'id_okrug'=>'required',
            'id_prefiks'=>'required',
            'id_geonim'=>'required',
            'house'=>'required',
            'corpus'=>'required',
            'liter'=>'required',
            'villa'=>'required',
            'parcel'=>'required',
            'construction'=>'required',
            'build_number'=>'required',
            'paddress'=>'required',
            'base_address_flag'=>'required',
            'id_user'=>'required',
        ]);

        $address->update($request->all());
        return redirect()->route('address.index')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $id_address_eas)
    {
        if (Auth::user()->cannot('delete',Address::class))
            Abort(403);
        $address = address::find($id_address_eas);
        $address->delete();
        // redirect
        return redirect()->route('address.index')
            ->with('success','address deleted successfully');
    }
}
