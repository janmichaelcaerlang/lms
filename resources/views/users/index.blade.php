@extends('layouts.app')

@section('content')
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-2">
		<h2 class="mb-0">Users</h2>
		<a href="{{ route('users.create') }}" class="btn btn-link btn-light">Add Teacher</a>
	</div>
    <table class="table">
    	<thead>
    		<tr>
    			<th>#</th>
    			<th>Name</th>
    			<th>Email</th>
    			<th>Role</th>
    			<th>Action</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($users as $user)
    		<tr>
    			<th>{{ $loop->iteration }}</th>
    			<td>{{ $user->firstname }} {{ $user->lastname }}</td>
    			<td>{{ $user->email }}</td>
    			<td>{{ implode(', ', $user->roles()->get()->pluck('label')->toArray()) }}</td>
    			<td></td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>
</div>
@endsection
