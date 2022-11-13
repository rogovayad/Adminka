<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use App\Events\AddressViewEvent;
use Illuminate\Support\Facades\Session;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $address
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $address=Address::getCachedAll();
        $address=Address::all();
        return view::make('address.index')->with('address', $address);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (empty(Auth::user()))
            return redirect()->route('login');
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
        $id_address_eas=$request->get('id_address_eas');
        $id_building_eas=$request->get('id_building_eas');
        $id_raion=$request->get('id_raion');
        $id_okrug=$request->get('id_okrug');
        $id_prefiks=$request->get('id_prefiks');
        $id_geonim=$request->get('id_geonim');
        $house=$request->get('house');
        $corpus=$request->get('corpus');
        $liter=$request->get('liter');
        $villa=$request->get('villa');
        $parcel=$request->get('parcel');
        $construction=$request->get('construction');
        $build_number=$request->get('build_number');
        $paddress=$request->get('paddress');
        $base_address_flag=$request->get('base_address_flag');
        $id_user=$request->get('id_user');
        if (empty($id_address_eas)){
            Session::flash('alertType','danger');
            Session::flash('alertText','Error!!! id_address_eas cant be null!!!');
            return redirect()->route('address.index');
        }
        if (empty($id_building_eas)){
            Session::flash('alertType','danger');
            Session::flash('alertText','Error!!! id_building_eas cant be null!!!');
            return redirect()->route('address.index');
        }
        if (empty($id_raion)){
            Session::flash('alertType','danger');
            Session::flash('alertText','Error!!! id_raion cant be null!!!');
            return redirect()->route('address.index');
        }
        if (empty($id_prefiks)){
            Session::flash('alertType','danger');
            Session::flash('alertText','Error!!! id_prefiks cant be null!!!');
            return redirect()->route('address.index');
        }
        if (empty($id_okrug)){
            Session::flash('alertType','danger');
            Session::flash('alertText','Error!!! id_okrug cant be null!!!');
            return redirect()->route('address.index');
        }
        if (empty($id_geonim)){
            Session::flash('alertType','danger');
            Session::flash('alertText','Error!!! id_geonim cant be null!!!');
            return redirect()->route('address.index');
        }
        if (empty($paddress)){
            Session::flash('alertType','danger');
            Session::flash('alertText','Error!!! id_paddress cant be null!!!');
            return redirect()->route('address.index');
        }
        if (empty($base_address_flag)){
            Session::flash('alertType','danger');
            Session::flash('alertText','Error!!! base_address_flag cant be null!!!');
            return redirect()->route('address.index');
        }
        if (empty($id_user)){
            Session::flash('alertType','danger');
            Session::flash('alertText','Error!!! id_user cant be null!!!');
            return redirect()->route('address.index');
        }
        Address::create($request->all());
        return redirect()->route('address.index')->withInput($request->all());
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
    public function edit(int $id_address_eas)
    {
        if (empty(Auth::user()))
            return redirect()->route('login');
        if (Auth::user()->cannot('update',Address::class)) {
       //     Log::channel('slack')->error('You cant edit!');
            Abort(403);
        }
        $address = Address::find($id_address_eas);
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
        if (empty(Auth::user()))
            return redirect()->route('login');
        if (Auth::user()->cannot('update',Address::class))
            Abort(403);
        $id_address_eas=$request->get('id_address_eas');
        $id_building_eas=$request->get('id_building_eas');
        $id_raion=$request->get('id_raion');
        $id_okrug=$request->get('id_okrug');
        $id_prefiks=$request->get('id_prefiks');
        $id_geonim=$request->get('id_geonim');
        $house=$request->get('house');
        $corpus=$request->get('corpus');
        $liter=$request->get('liter');
        $villa=$request->get('villa');
        $parcel=$request->get('parcel');
        $construction=$request->get('construction');
        $build_number=$request->get('build_number');
        $paddress=$request->get('paddress');
        $base_address_flag=$request->get('base_address_flag');
        $id_user=$request->get('id_user');
        $address->update($request->all());
        // event(new AddressViewEvent($address));
        return redirect()->route('address.index')->with('success','Address updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        if (empty(Auth::user()))
            return redirect()->route('login');
        if (Auth::user()->cannot('delete',Address::class))
            Abort(403);
        $address->delete();
        return redirect()->route('address.index')->with('success','address deleted successfully');
    }
}
