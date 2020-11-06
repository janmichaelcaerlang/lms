@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Subject') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('subjects.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Code') }}</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autocomplete="code" autofocus>

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title">

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="units" class="col-md-4 col-form-label text-md-right">{{ __('Unit(s)') }}</label>

                            <div class="col-md-6">
                                <input id="units" type="number" class="form-control @error('units') is-invalid @enderror" name="units" value="{{ old('units') }}" required autocomplete="units">

                                @error('units')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lec" class="col-md-4 col-form-label text-md-right">{{ __('Lecture Hours') }}</label>

                            <div class="col-md-6">
                                <input id="lec" type="number" class="form-control" name="lec" value="{{ old('lec') }}" autocomplete="lec">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lab" class="col-md-4 col-form-label text-md-right">{{ __('Lab Hours') }}</label>

                            <div class="col-md-6">
                                <input id="lab" type="number" class="form-control" name="lab" value="{{ old('lab') }}" autocomplete="lab">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lec" class="col-md-4 col-form-label text-md-right">{{ __('Prerequisite') }}</label>

                            <div class="col-md-6">
                                <select id="prerequisite" class="form-control" name="prerequisite" value="{{ old('prerequisite') }}">
                                    <option disabled hidden selected value="">Select Prerequisite</option>
                                    @foreach($subjects as $subject)
                                        <option value="{{ $subject->id }}">{{ $subject->code }} - {{ $subject->title }}</option>
                                    @endforeach
                                </select>
                               
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                                <a href="{{ route('subjects.index') }}" class="btn btn-link">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
