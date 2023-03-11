@extends('layout')
@section('content')
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                <h1>Diary Stories</h1>
            </div>
        </div>
        <form action="/setup-diary" method="post" enctype="multipart/form-data" class="form-group" style="width:70%; margin-left:10%;">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-white">Header</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Please header of stories">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label text-white">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Please write stories" rows="3"></textarea>
              </div>
            <button type="submit"  value="Add Stories" class="btn btn-primary">Submit</button>
        </form>
@endsection

