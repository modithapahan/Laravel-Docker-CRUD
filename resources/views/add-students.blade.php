@extends('layouts.app')

@section('content')
<div class="container-sm">    
    <form class="mt-3 mb-3" method="POST" action="{{ route('student.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="f_name" class="form-label">First Name</label>
            <input type="text" class="form-control" name="f_name">
        </div>
        <div class="mb-3">
            <label for="m_name" class="form-label">Middle Name</label>
            <input type="text" class="form-control" name="m_name">
        </div>
        <div class="mb-3">
            <label for="l_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="l_name">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" name="dob">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" name="age">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" name="location">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection