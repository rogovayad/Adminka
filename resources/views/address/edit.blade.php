@extends('layouts.app')
@section('main')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('address.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('address.update',$address->id_address_eas) }}" method="POST">
        @csrf

        @method('PUT')
        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>id_address_eas:</strong>
                    <input type="text" name="title" value="{{ $address->id_address_eas }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>id_building_eas:</strong>
                    <input type="text" name="title" value="{{ $address->id_building_eas }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>id_raion:</strong>
                    <input type="text" name="title" value="{{ $address->id_raion }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>id_okrug:</strong>
                    <input type="text" name="title" value="{{ $address->id_okrug }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>id_prefiks:</strong>
                    <input type="text" name="title" value="{{ $address->id_prefiks }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>id_geonim:</strong>
                    <input type="text" name="title" value="{{ $address->id_geonim }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>house:</strong>
                    <input type="text" name="title" value="{{ $address->house }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>corpus:</strong>
                    <input type="text" name="title" value="{{ $address->corpus }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>liter:</strong>
                    <input type="text" name="title" value="{{ $address->liter }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>villa:</strong>
                    <input type="text" name="title" value="{{ $address->villa }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>parcel:</strong>
                    <input type="text" name="title" value="{{ $address->parcel }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>construction:</strong>
                    <input type="text" name="title" value="{{ $address->construction }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>build_number:</strong>
                    <input type="text" name="title" value="{{ $address->build_number }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>paddress:</strong>
                    <input type="text" name="title" value="{{ $address->paddress }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>base_address_flag:</strong>
                    <input type="text" name="title" value="{{ $address->base_address_flag }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>id_user:</strong>
                    <input type="text" name="title" value="{{ $address->id_user }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
