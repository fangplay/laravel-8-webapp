@extends('layout')

@section('content')
    <h3>Game List</h3>
    <table>
        <tr>
            <th>Game</th>
            <th>Generation</th>
        </tr>
        @foreach ($gameList as $game)
        <tr>
            <td>{{ $game->gamename }}</td>
            <td>{{ $game->genname }}</td>
        </tr>
        @endforeach
    </table>
@endsection
