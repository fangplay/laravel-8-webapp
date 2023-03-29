@extends('layout')
@section('content')
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                <h1>Diary Inserting</h1>
            </div>
        </div>
        <form action="{{url('insert-diary')}}" method="post" enctype="multipart/form-data" class="form-group" style="width:70%; margin-left:10%;">
            <div class="mb-3">
                <label for="title" class="form-label text-white">Title</label>
                <input type="text" class="form-control" id="title" name="title" rows="3" placeholder="Please insert title stories">
              </div>
              <div  class="mb-3">
                <label for="date" class="form-label text-white">Date</label>
                <input type="date" class="form-control" id="date" name="date">
              </div>
              {{-- <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label text-white">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Please write stories" rows="3"></textarea>
              </div> --}}
            <button type="submit"  value="Add Stories" class="btn btn-primary">Submit</button>
        </form>
@endsection

