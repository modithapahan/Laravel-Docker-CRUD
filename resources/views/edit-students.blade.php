@extends('layouts.app')

@section('content')
<div class="container-sm">    
    <form class="mt-3 mb-3" method="POST" action="{{ route('student.update', $student) }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="f_name" class="form-label">First Name</label>
            <input type="text" class="form-control" name="f_name" value="{{$student->f_name}}">
        </div>
        <div class="mb-3">
            <label for="m_name" class="form-label">Middle Name</label>
            <input type="text" class="form-control" name="m_name" value="{{$student->m_name}}">
        </div>
        <div class="mb-3">
            <label for="l_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="l_name" value="{{$student->l_name}}">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" name="dob" value="{{$student->dob}}">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" name="age" value="{{$student->age}}">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" name="location" value="{{$student->location}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection