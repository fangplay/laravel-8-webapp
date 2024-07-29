@extends('layout')

@section('content')
    <div>
        @foreach ($genData as $gen)
            <h3>{{ $gen }}</h3>
        @endforeach
    </div>
@endsection