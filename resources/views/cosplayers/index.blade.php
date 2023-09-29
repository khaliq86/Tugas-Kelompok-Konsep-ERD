@extends('component.app')

@section('content')
    <h1>List Cosplayer</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cosplayers as $cosplayer)
                <tr>
                    <td>{{ $cosplayer->id }}</td>
                    <td>{{ $cosplayer->name }}</td>
                    <td>{{ $cosplayer->email }}</td>
                    <td>{{ $cosplayer->phone }}</td>
                    <td>{{ $cosplayer->address }}</td>
                    <td>{{ $cosplayer->created_at }}</td>
                    <td>{{ $cosplayer->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
