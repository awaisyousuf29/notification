@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <form method="POST" action="{{ route('deposit') }}">
                @csrf
                <h5 class="text-center mb-3">Earn Badge</h5>
                <div class="row mb-3">
                    <label for="badge_name" class="col-md-4 col-form-label text-md-end">Badge Name</label>
                    <div class="col-md-6">
                        <input id="badge_name" type="text" class="form-control @error('badge_name') is-invalid
                        @enderror" name="badge_name" value="{{ old('badge_name') }}" required autocomplete="badge_name" autofocus>
                        @error('badge_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Earn') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
