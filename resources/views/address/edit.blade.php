@extends('layouts.app')
@section('content')

    @if (session()->has('alertType'))
        <div class="alert alert-{{session('alertType')}}">{{session('alertText')}}</div>
    @endif

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Address</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('address.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <form action="{{ route('address.update',['address'=>$address->id_address_eas]) }}" method="POST">
        @csrf
        @method('PUT')
        <p>id_address_eas=<input type="number" name="id_address_eas" required value="{{old('id_address_eas', $address->id_address_eas)}}"></p>
        <p>id_building_eas=<input type="number" name="id_building_eas" required value="{{old('id_building_eas', $address->id_building_eas)}}"></p>
        <p>id_raion=<input type="number" name="id_raion" required value="{{old('id_raion', $address->id_raion)}}"></p>
        <p>id_okrug=<input type="number" name="id_okrug" required value="{{old('id_okrug', $address->id_okrug)}}"></p>
        <p>id_prefiks=<input type="number" name="id_prefiks" required value="{{old('id_prefiks', $address->id_prefiks)}}"></p>
        <p>id_geonim=<input type="number" name="id_geonim" required value="{{old('id_geonim', $address->id_geonim)}}"></p>
        <p>house=<input type="text" name="house" value="{{old('house', $address->house)}}"></p>
        <p>corpus=<input type="text" name="corpus" value="{{old('corpus', $address->corpus)}}"></p>
        <p>liter=<input type="text" name="liter" value="{{old('liter', $address->liter)}}"></p>
        <p>villa=<input type="text" name="villa" value="{{old('villa', $address->villa)}}"></p>
        <p>parcel=<input type="text" name="parcel" value="{{old('parcel', $address->parcel)}}"></p>
        <p>construction=<input type="text" name="construction" value="{{old('construction', $address->construction)}}"></p>
        <p>build_number=<input type="text" name="build_number" value="{{old('build_number', $address->build_number)}}"></p>
        <p>paddress=<input type="text" name="paddress" required value="{{old('paddress', $address->paddress)}}"></p>
        <p>base_address_flag=<input type="text" name="base_address_flag" required value="{{old('base_address_flag', $address->base_address_flag)}}"></p>
        <p>id_user=<input type="number" name="id_user" required value="{{old('id_user', $address->id_user)}}"></p>
        <p><button type="submit" class="btn btn-primary">Edit</button></p>
    </form>
    <form action="{{ route('address.destroy',['address'=>$address->id_address_eas]) }}"  method="POST">
        @csrf
        @method('DELETE')
        <p><button type="submit" class="btn btn-danger">Delete</button></p>
    </form>
@endsection
