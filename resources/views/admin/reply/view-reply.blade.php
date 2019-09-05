@extends('admin.master')

@section('body')
    <h2 class="text-uppercase text-center text-primary">Manage Reply Information</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Visitor Name</th>
            <th>Visitor Email</th>
            <th>Visitor Reply</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($messages as $message)
            <tr>
                <td>{{ $message->name }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->message }}</td>
                <td>
                    <a href="{{ route('delete-reply',['id' => $message->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this !!!')">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
