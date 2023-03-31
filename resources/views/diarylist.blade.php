@extends('layout')
@section('content')
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        <div class="mt-2 text-black-600 dark:text-black-400 text-sm">
            <h1>Diary Stories</h1>
        </div>
    </div>
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        <a href="list-diary">Insert</a>
    </div>
    <table>
        <tr>
            <th>Date</th>
            <th>Stories</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($diary as $story)
        <tr>
            <td>{{ $story->Date }}</td>
            <td>{{ $story->Story }}</td>
            <td><a href="{{url('edit-diary/'.$story->id)}}">Edit</a></td>
            <td><a href="{{url('delete-diary/'.$story->id)}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
@endsection
