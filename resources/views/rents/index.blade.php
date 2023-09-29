@extends('component.app')

@section('content')
        <h1>Rents</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Outfit ID</th>
                    <th>Cosplayer ID</th>
                    <th>Rental Date</th>
                    <th>Return Date</th>
                    <th>Is Return</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rents as $rent)
                <tr>
                    <td>{{ $rent->id }}</td>
                    <td>{{ $rent->id_outfit }}</td>
                    <td>{{ $rent->id_cosplayer }}</td>
                    <td>{{ $rent->rental_date }}</td>
                    <td>{{ $rent->return_date }}</td>
                    <td>{{ $rent->is_return ? 'Yes' : 'No' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection
