@extends('layouts.app')
@section('main')

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

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('address.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>id_address_eas:</strong>
                    <textarea class="form-control" style="height:12px" name="id_address_eas" placeholder="id_address_eas"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>id_building_eas:</strong>
                    <textarea class="form-control" style="height:12px" name="id_building_eas" placeholder="id_building_eas"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>id_raion:</strong>
                    <textarea class="form-control" style="height:12px" name="id_raion" placeholder="id_raion"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>id_okrug:</strong>
                    <textarea class="form-control" style="height:12px" name="id_okrug" placeholder="id_okrug"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>id_prefiks:</strong>
                    <textarea class="form-control" style="height:12px" name="id_prefiks" placeholder="id_prefiks"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>id_geonim:</strong>
                    <textarea class="form-control" style="height:12px" name="id_geonim" placeholder="id_geonim"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>house:</strong>
                    <textarea class="form-control" style="height:12px" name="house" placeholder="house"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>corpus:</strong>
                    <textarea class="form-control" style="height:12px" name="corpus" placeholder="corpus"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>liter:</strong>
                    <textarea class="form-control" style="height:12px" name="liter" placeholder="liter"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>villa:</strong>
                    <textarea class="form-control" style="height:12px" name="villa" placeholder="villa"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>parcel:</strong>
                    <textarea class="form-control" style="height:12px" name="parcel" placeholder="parcel"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>construction:</strong>
                    <textarea class="form-control" style="height:12px" name="construction" placeholder="construction"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>build_number:</strong>
                    <textarea class="form-control" style="height:12px" name="build_number" placeholder="build_number"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>paddress:</strong>
                    <textarea class="form-control" style="height:12px" name="paddress" placeholder="paddress"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>base_address_flag:</strong>
                    <textarea class="form-control" style="height:12px" name="base_address_flag" placeholder="base_address_flag"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>id_user:</strong>
                    <textarea class="form-control" style="height:12px" name="id_user" placeholder="id_user"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
