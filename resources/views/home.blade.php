@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <table class="table table-striped table-hover">
            <thead class="table-success">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">DOB</th>
                <th scope="col">Age</th>
                <th scope="col">Location</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>{{$student->f_name}}</td>
                    <td>{{$student->m_name}}</td>
                    <td>{{$student->l_name}}</td>
                    <td>{{$student->dob}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->location}}</td>
                    <td>
                        <a href="{{ route('student.edit', $student->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{ route('student.delete', $student->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
