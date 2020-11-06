@extends('layouts.app')

@section('content')
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-2">
		<h2 class="mb-0">Subjects</h2>
		<a href="{{ route('subjects.create') }}" class="btn btn-link btn-light">Add Subject</a>
	</div>
    <table class="table">
    	<thead>
    		<tr>
    			<th>#</th>
    			<th>Code</th>
                <th>Title</th>
                <th>Action</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($subjects as $subject)
    		<tr>
    			<th>{{ $loop->iteration }}</th>
    			<td>{{ $subject->code }}</td>
                <td>{{ $subject->title }}</td>
    			<td></td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>
</div>
@endsection
