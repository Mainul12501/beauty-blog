@extends('admin.master')

@section('body')
    <h2 class="text-primary text-center text-uppercase">Manage Slider Images</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Slider Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($images as $image)
            <tr>
                <td>
                    <img src="{{ asset($image->slider_image) }}" alt="{{ 'slider-image-'.$image->id }}" height="100" width="150"/>
                </td>
                <td>
                    <a href="{{ route('delete-image',['id' => $image->id]) }}" onclick="return confirm('Are You sure to delete this !!!')">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
