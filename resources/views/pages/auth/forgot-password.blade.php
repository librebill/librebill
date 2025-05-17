@extends('layouts.generic')

@section('title', __('Forgot Password'))

@push('head')
<style>
    main.flex-grow-1 {
        display: flex;
        align-items: center;
    }
</style>
@endpush

@section('content')
<div class="row justify-content-center align-items-center h-100">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h4 class="mb-0">{{ __('Forgot Your Password?') }}</h4>
            </div>
            <div class="card-body py-4">
                <p class="text-muted mb-4">{{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Email Password Reset Link') }}
                        </button>
                    </div>
                </form>

                <div class="text-center mt-4">
                    <a href="{{ route('login') }}" class="text-decoration-none">{{ __('Back to login') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
