@extends('layouts.app')

@section('content')
<div class="container">
	<div>
		<h4 class="mb-0">{{ $course->name }}</h4>
		<p class="text-muted">{{ $course->acronym }}</p>
	</div>
	<div class="row">
		<div class="col-md-7">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Subject</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

					@if(count($course->subjects) > 0 )
						@foreach($course->subjects as $subject)
							
							<tr>
								<td>{{ $subject->name }}</td>
								<td></td>
							</tr>
							
						@endforeach
					@else
						<tr>
							<td colspan="2">No records found</td>
						</tr>
					@endif
				</tbody>
			</table>
		</div>

		<div class="col-md-5">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Subject</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($subjects as $subject)
						@if(!$course->subjects->contains($subject))
						<tr>
							<td>{{ $subject->name }}</td>
							<td><button class="btn btn-primary">Add</button></td>
						</tr>
						@endif
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
