@extends('layouts.app')

@section('content')
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-2">
		<h2 class="mb-0">Courses</h2>
		<a href="{{ route('courses.create') }}" class="btn btn-link btn-light">Add Course</a>
	</div>
    <table class="table">
    	<thead>
    		<tr>
    			<th>#</th>
    			<th>Course Name</th>
    			<th>Acronym</th>
    			<th>Action</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($courses as $course)
    		<tr>
    			<th>{{ $loop->iteration }}</th>
    			<td><a href="{{ route('courses.show', $course) }}">{{ $course->name }}</a></td>
    			<td>{{ $course->acronym }}</td>
    			<td></td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>
</div>
@endsection
