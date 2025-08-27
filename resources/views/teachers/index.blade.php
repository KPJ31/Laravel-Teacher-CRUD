@extends('layouts.app')

@section('main-content')
    <div class="row pt-5">
        <div class="mx-auto">
            <a class="btn btn-primary" href="{{ route('teachers.create') }}">Create</a>
            <div class="card p-4 shadow">
                <h1 class="text-center mb-3">Teacher's Table</h1>
            <table class="table table-bordered border-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Date Of Birth</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                        <tr>
                            <th scope="row">{{ $teacher->id }}</th>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->gender }}</td>
                            <td>{{ $teacher->dob }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td>{{ $teacher->address }}</td>
                            <td>{{ $teacher->pnum }}</td>
                            <td>{{ $teacher->grade }}</td>
                            <td>
                                @if($teacher->photo)
                                    <img src="{{ asset('storage/' . $teacher->photo) }}" alt="Photo" width="80">
                                @else
                                    No Photo
                                @endif
                            </td>
                            <td><a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection