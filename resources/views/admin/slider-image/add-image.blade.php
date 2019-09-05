@extends('admin.master')

@section('body')
    <h2 class="text-primary text-uppercase text-center">Add Slider Image</h2>
    <h6 class="text-center text-success">{{ Session::get('message') }}</h6>
    <form action="{{ route('new-image') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="" class="col-md-3">Slider Image</label>
            <div class="col-md-9">
                <input type="file" class="form-control-file" name="slider_image"/>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success btn-block" value="Add Slider Image"/>
        </div>
    </form>
@endsection
