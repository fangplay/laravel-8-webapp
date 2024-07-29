@extends('layout')

@section('content')
    <h3>Projects</h3>
    <div>
    <table>
        <tr>
            <th>Project Name</th>
            <th>Status</th>
        </tr>
        @foreach ($projects as $p)
            <tr>
                <td>{{ $p->pname }}</td>
                <td>{{ $p->sname }}</td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection
