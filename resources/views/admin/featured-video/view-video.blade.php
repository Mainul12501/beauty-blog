@extends('admin.master')

@section('body')
    <h2 class="text-primary text-center text-uppercase">Manage Featured Video</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Featured Video</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($videos as $video)
            <tr>
                <td>
                    <video src="{{ asset($video->featured_video) }}" height="200" width="200" controls></video>
                </td>
                <td>
                    <a href="{{ route('delete-video',['id' => $video->id]) }}" onclick="return confirm('Are You sure to delete this !!!')">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
