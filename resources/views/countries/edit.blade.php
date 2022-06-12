@extends('layouts.main')

@section('content')
<div class="d-sm-flex align-items justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Countries</h1>
</div>
<div class="row mx-auto justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="card-header">{{ __('Edit Country') }}</div>
                    <a href="{{route('country.index')}}" class="btn btn-default">Back</a>
                </div>
                <form method="POST" action="{{ route('country.update', $country) }}">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="country_code" class="col-md-4 col-form-label text-md-end">{{ __('Country Code') }}</label>

                        <div class="col-md-6">
                            <input id="country_code" type="text" class="form-control @error('country_code') is-invalid @enderror" name="country_code" value="{{ old('country_code', $country->country_code) }}" required autocomplete="country_code" autofocus>

                            @error('country_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Coutry Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $country->name) }}" required autocomplete="name" autofocus>

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
                                {{ __('Update Country') }}
                            </button>
                        </div>
                    </div>
                </form>

                <div class="p-2">
                    <form action="{{route('country.destroy', $country)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete ({{ $country->country_code }})</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection