@php($vue = true)
@extends('layouts.generic')
@section('title', __('Login'))

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
                <h4 class="mb-0">{{ __('Sign In') }}</h4>
            </div>
            <div class="card-body py-4">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" id="loginForm">
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

                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="small text-decoration-none">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4 form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" @click.prevent="submitForm" :disabled="processing">
                            <span v-if="!processing">{{ __('Sign In') }}</span>
                            <span v-else>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                {{ __('Processing...') }}
                            </span>
                        </button>
                    </div>
                </form>

                <div class="text-center mt-4">
                    <p class="mb-0">{{ __("Don't have an account?") }} <a href="{{ route('register') }}" class="text-decoration-none">{{ __('Register here') }}</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

@if($vue)
<script>
    const { createApp } = Vue;

    createApp({
        data() {
            return {
                processing: false
            }
        },
        methods: {
            submitForm() {
                if (this.processing) return;

                this.processing = true;

                // Add a small delay to show the loading state
                setTimeout(() => {
                    document.getElementById('loginForm').submit();
                }, 100);
            }
        }
    }).mount('#app');
</script>
@endif
@endsection
