@extends('layouts.app')

@section('content')
<div class="container">
	@foreach($abilities as $ability)
	    @can($ability->action)
	    <div>
	    	<a href="{{ route($ability->route)}} ">{{ $ability->label }}</a>
	    </div>
	    @endcan
    @endforeach
</div>
@endsection
