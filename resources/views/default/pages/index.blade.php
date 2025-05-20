@php($vue = true)
@extends('layouts.generic')
@section('title', config('app.name'))
@section('content')
    <div>
        <div class="row">
            <div class="col text-center mt-3">
                <h3>Welcome! How can we help you today?</h3>
            </div>
        </div>
        <div class="row mt-5 home-cards">
            <div class="col-lg-3 text-center">
                <a href="{{ route('login') }}">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h1>
                                <i class="fas fa-user fa-fw"></i>
                            </h1>
                            <h5 class="card-title mt-4">Sign In</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 text-center">
                <a href="{{ route('register') }}">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h1>
                                <i class="fas fa-user-plus fa-fw"></i>
                            </h1>
                            <h5 class="card-title mt-4">Create Account</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 text-center">
                <a href="{{ route('login') }}">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h1>
                                <i class="fas fa-cart-plus fa-fw"></i>
                            </h1>
                            <h5 class="card-title mt-4">Order Services</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 text-center">
                <a href="{{ route('login') }}">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h1>
                                <i class="fas fa-life-ring fa-fw"></i>
                            </h1>
                            <h5 class="card-title mt-4">Support Center</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- News Alert -->
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading">Important Notice</h4>
                    <p>We will be performing scheduled maintenance on <strong>May 20, 2025, from 02:00
                            AM to 04:00 AM UTC</strong>. During this time, services may be temporarily
                        unavailable. We apologize for any inconvenience.</p>
                    <p class="mb-0">Thank you for your understanding.</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
@endsection
