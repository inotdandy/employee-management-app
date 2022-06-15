@extends('layouts.main')

@section('content')
<div class="d-sm-flex align-items justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Cities</h1>
</div>
<div class="row mx-auto justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="card-header">{{ __('Edit City') }}</div>
                    <a href="{{route('city.index')}}" class="btn btn-default">Back</a>
                </div>
                <form method="POST" action="{{ route('city.update', $city) }}">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="state_id" class="col-md-4 col-form-label text-md-end">{{ __('State') }}</label>

                        <div class="col-md-6">
                            <select class="form-control" aria-label="Select State" name="state_id">
                                <option>Select State</option>
                                @foreach ($states as $state)
                                    <option value="{{$state->id}}" {{$state->id == $city->state->id ? 'Selected' : ''}}>{{$state->name}}</option>
                                @endforeach
                              </select>

                            @error('state_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('City Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $state->name) }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update City') }}
                            </button>
                        </div>
                    </div>
                </form>

                <div class="p-2">
                    <form action="{{route('city.destroy', $city)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete ({{ $city->name }})</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection