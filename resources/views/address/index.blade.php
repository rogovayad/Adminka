@extends('layouts.app')
@section('main')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('address.create') }}"></a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>id_address_eas</th>
            <th>id_building_eas</th>
            <th>id_raion</th>
            <th>id_okrug</th>
            <th>id_prefiks</th>
            <th>id_geonim</th>
            <th>house</th>
            <th>corpus</th>
            <th>liter</th>
            <th>villa</th>
            <th>parcel</th>
            <th>construction</th>
            <th>build_number</th>
            <th>paddress</th>
            <th>base_address_flag</th>
            <th>id_user</th>
        </tr>
        @foreach ($address as $key=>$addresses)
            <tr>
                <td>{{ $addresses->id_address_eas }}</td>
                <td>{{ $addresses->id_building_eas }}</td>
                <td>{{ $addresses->id_raion }}</td>
                <td>{{ $addresses->id_okrug }}</td>
                <td>{{ $addresses->id_prefiks }}</td>
                <td>{{ $addresses->id_geonim }}</td>
                <td>{{ $addresses->house }}</td>
                <td>{{ $addresses->corpus }}</td>
                <td>{{ $addresses->liter }}</td>
                <td>{{ $addresses->villa }}</td>
                <td>{{ $addresses->parcel }}</td>
                <td>{{ $addresses->construction }}</td>
                <td>{{ $addresses->build_number }}</td>
                <td>{{ $addresses->paddress }}</td>
                <td>{{ $addresses->base_address_flag }}</td>
                <td>{{ $addresses->id_user }}</td>
            </tr>
        @endforeach
    </table>
    <br>
    <a class="btn btn-info" href="{{ route('address.show',$addresses->id_address_eas) }}">Show</a>
    <br>
    <a class="btn btn-primary" href="{{ route('address.edit',$addresses->id_address_eas) }}">Edit</a>
    <br>
    <form action="{{ route('address.destroy',$addresses->id_address_eas) }}" method="POST">

        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>



@endsection
