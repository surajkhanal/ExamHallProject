@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <h3 class="fs-5">Staff Management</h3>
        <a class="btn btn-info btn-sm" href="{{ route('examhallproject.staffadd') }}">Add Staff</a>
        <table class="table table-bordered mt-3">
            <tr>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Action</th>
                </thead>
            </tr>
            <tbody>
                @foreach($staffs as $staff)
                <tr>
                    <td>{{ $staff->id }}</td>
                    <td>{{ $staff->staffname }}</td>
                    <td>{{ $staff->department }}</td>
                    <td>
                        <a href="/staff-show/{{$staff->id}}" class="btn btn-success btn-sm">View</a>
                        <a href="/staff-edit/{{$staff->id}}" class="btn btn-info btn-sm">Edit</a>
                        <a href="/delete/{{$staff->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure')">Delete</a>
                    </td>
                    @endforeach
            </tbody>
            </tr>
        </table>
        <span>
            {{$staffs->links()}}
        </span>
        <style>
            .w-5
            {
                display: none;
            }
        </style>
    </div>
</div>
@endsection