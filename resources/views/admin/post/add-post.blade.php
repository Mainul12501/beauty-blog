@extends('admin.master')



@section('body')
    <div class="row">
        <div class="com-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Add Post</h2>
                </div>
                <div class="panel-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    <form action="{{ route('new-post') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="" class="col-md-3">Post Title</label>
                            <div class="col-md-9">
                                <input type="text" name="post_title" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-3">Post Details</label>
                            <div class="col-md-9">
                                <textarea name="post_details" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-3">Post Writer Name</label>
                            <div class="col-md-9">
                                <input type="text" name="writer_name" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-3">Post Image</label>
                            <div class="col-md-9">
                                <input type="file" name="post_image" class="form-control-file"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" value="Add Post"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
