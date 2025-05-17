@php($vue = true)
@extends('layouts.generic')
@section('title', __('Register'))

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
    <div class="col-md-8 col-lg-7">
        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h4 class="mb-0">{{ __('Create Account') }}</h4>
            </div>
            <div class="card-body py-4">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}" id="registerForm">
                    @csrf

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="first_name" class="form-label">{{ __('First Name') }}</label>
                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="given-name" autofocus>
                            @error('first_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="middle_name" class="form-label">{{ __('Middle Name') }} <span class="text-muted">({{ __('Optional') }})</span></label>
                            <input id="middle_name" type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" autocomplete="additional-name">
                            @error('middle_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="last_name" class="form-label">{{ __('Last Name') }}</label>
                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="family-name">
                            @error('last_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="language" class="form-label">{{ __('Preferred Language') }}</label>
                        <select id="language" class="form-select @error('language') is-invalid @enderror" name="language">
                            <option value="en" {{ old('language') == 'en' ? 'selected' : '' }}>English</option>
                        </select>
                        @error('language')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" @click.prevent="submitForm" :disabled="processing">
                            <span v-if="!processing">{{ __('Register') }}</span>
                            <span v-else>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                {{ __('Processing...') }}
                            </span>
                        </button>
                    </div>
                </form>

                <div class="text-center mt-4">
                    <p class="mb-0">{{ __("Already have an account?") }} <a href="{{ route('login') }}" class="text-decoration-none">{{ __('Sign in here') }}</a></p>
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
                    document.getElementById('registerForm').submit();
                }, 100);
            }
        }
    }).mount('#app');
</script>
@endif
@endsection
