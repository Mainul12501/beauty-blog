@extends('admin.master')

@section('body')
    <h2 class="text-center text-uppercase text-primary">Manage Posts</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Post Title</th>
                <th>Post Details</th>
                <th>Post Writer Name</th>
                <th>Post Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->post_title }}</td>
                <td>{{ $post->post_details }}</td>
                <td>{{ $post->writer_name }}</td>
                <td>
                    <img src="{{ asset($post->post_image) }}" alt="" height="100" width="100">
                </td>
                <td>
                    <a href="{{ route('edit-post',['id' => $post->id]) }}" class="btn btn-primary btn-xs">Edit</a>
                    <a href="{{ route('delete-post',['id' => $post->id]) }}" onclick="return confirm('Are You sure to delete this!!!')" class="btn btn-danger btn-xs">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
