@extends('component.app')

@section('content')
    <h1>List Outfit</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Outfit ID</th>
                <th>Outfit Name</th>
                <th>Size</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($outfit as $cosplay)
                <tr>
                    <td>{{ $cosplay->id }}</td>
                    <td>{{ $cosplay->outfit_name }}</td>
                    <td>{{ $cosplay->size }}</td>
                    <td>{{ $cosplay->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
