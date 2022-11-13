@extends('layouts.app')
@section('content')

    @if (session()->has('alertType'))
        <div class="alert alert-{{session('alertType')}}">{{session('alertText')}}</div>
    @endif

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Address</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('address.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <form action="{{ route('address.store') }}" method="POST">
    @csrf
    <p>id_address_eas=<input type="number" name="id_address_eas"></p>
    <p>id_building_eas=<input type="number" name="id_building_eas"></p>
    <p>id_raion=<input type="number" name="id_raion"></p>
    <p>id_okrug=<input type="number" name="id_okrug"></p>
    <p>id_prefiks=<input type="number" name="id_prefiks"></p>
    <p>id_geonim=<input type="number" name="id_geonim"></p>
    <p>house=<input type="text" name="house"></p>
    <p>corpus=<input type="text" name="corpus"></p>
    <p>liter=<input type="text" name="liter"></p>
    <p>villa=<input type="text" name="villa"></p>
    <p>parcel=<input type="text" name="parcel"></p>
    <p>construction=<input type="text" name="construction"></p>
    <p>build_number=<input type="text" name="build_number"></p>
    <p>paddress=<input type="text" name="paddress"></p>
    <p>base_address_flag=<input type="text" name="base_address_flag"></p>
    <p>id_user=<input type="number" name="id_user"></p>
    <p><button type="submit">Create!</button></p>
    </form>
@endsection
