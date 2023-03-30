@extends('layout')
@section('content')
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                <h1>Diary Editing</h1>
            </div>
        </div>
        <form action="insertDiary" method="post" enctype="multipart/form-data" class="form-group" style="width:70%; margin-left:10%;">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <div class="mb-3">
                <label for="title" class="form-label text-white">Title</label>
                <input type="text" class="form-control" id="story" name="story" rows="3" placeholder="Please insert title stories">
              </div>
              <div  class="mb-3">
                <label for="date" class="form-label text-white">Date</label>
                <input type="date" class="form-control" id="date" name="date">
              </div>
              {{-- <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label text-white">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Please write stories" rows="3"></textarea>
              </div> --}}
              <input type="submit" class="btn btn-primary" value="Add" />
        </form>
@endsection

