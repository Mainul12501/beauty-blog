@extends('admin.master')

@section('body')
    <h2 class="text-primary text-center text-uppercase">View Newsletter Emails</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($newsletters as $newsletter)
                <tr>
                    <td>{{ $newsletter->newsletter }}</td>
                    <td>
                        <a href="{{ route('delete-email',['id'  =>$newsletter->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this !!!')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
