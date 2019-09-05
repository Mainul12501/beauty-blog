@extends('admin.master')

@section('body')
    <h2 class="text-primary text-uppercase text-center">Add Featured Video</h2>
    <h6 class="text-center text-success">{{ Session::get('message') }}</h6>
    <form action="{{ route('new-video') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="" class="col-md-3">Featured Video</label>
            <div class="col-md-9">
                <input type="file" class="form-control-file" name="featured_video"/>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success btn-block" value="Add Featured Video"/>
        </div>
    </form>
@endsection
