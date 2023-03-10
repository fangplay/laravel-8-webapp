@extends('layout')
@section('content')
        <form action="/setup-date" method="post" enctype="multipart/form-data" class="form-group" style="width:70%; margin-left:50%;">
            <div class="form-group row">
                <label for="titleid" class="col-sm-3 col-form-label">Date</label>
                <div class="col-sm-9">
                    <input name="date" type="datetime-local" class="form-control" id="date">
                </div>
            </div>
            <button type="submit"  value="Add Stories" class="btn btn-primary">Submit</button>
        </form>
@endsection

