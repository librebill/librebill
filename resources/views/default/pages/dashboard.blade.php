@extends('default.layouts.generic')

@section('title', 'User Dashboard')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">Dashboard</h1>

    <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 mb-4">
            <!-- User Info Card -->
            <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim(auth()->user()->email))) }}?d=mp&s=100" alt="User Gravatar" class="rounded-circle mb-3" width="100" height="100">
                    <h5 class="card-title">{{ auth()->user()->first_name }} {{ auth()->user()->middle_name }} {{ auth()->user()->last_name }}</h5>
                    <p class="card-text text-muted">{{ auth()->user()->email }}</p>
                </div>
            </div>

            <!-- Quick Links Card -->
            <div class="card">
                <div class="card-header">
                    Quick Links
                </div>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action">Billing</a>
                    <a href="#" class="list-group-item list-group-item-action">Services</a>
                    <a href="#" class="list-group-item list-group-item-action">Support</a>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-lg-9">
            <!-- News Alert -->
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">Important Notice</h4>
                <p>We will be performing scheduled maintenance on <strong>May 20, 2025, from 02:00 AM to 04:00 AM UTC</strong>. During this time, services may be temporarily unavailable. We apologize for any inconvenience.</p>
                <p class="mb-0">Thank you for your understanding.</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <!-- Latest Services -->
            <div class="card mb-4">
                <div class="card-header">
                    Latest Services
                </div>
                <div class="card-body" style="max-height: 300px; overflow-y: auto;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Service A - Active</li> {{-- Placeholder --}}
                        <li class="list-group-item">Service B - Pending</li> {{-- Placeholder --}}
                        <li class="list-group-item">Service C - Active</li> {{-- Placeholder --}}
                        <li class="list-group-item">Service D - Suspended</li> {{-- Placeholder --}}
                        <li class="list-group-item">Service E - Active</li> {{-- Placeholder --}}
                        <li class="list-group-item">Service F - Active</li> {{-- Placeholder --}}
                    </ul>
                </div>
            </div>

            <!-- Latest Tickets -->
            <div class="card mb-4">
                <div class="card-header">
                    Latest Support Tickets
                </div>
                <div class="card-body" style="max-height: 300px; overflow-y: auto;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">#TKT001 - Issue with login - Open</li> {{-- Placeholder --}}
                        <li class="list-group-item">#TKT002 - Billing query - Answered</li> {{-- Placeholder --}}
                        <li class="list-group-item">#TKT003 - Feature request - On Hold</li> {{-- Placeholder --}}
                        <li class="list-group-item">#TKT004 - Service down - Open</li> {{-- Placeholder --}}
                        <li class="list-group-item">#TKT005 - General question - Closed</li> {{-- Placeholder --}}
                    </ul>
                </div>
            </div>

            <!-- Latest Invoices -->
            <div class="card mb-4">
                <div class="card-header">
                    Latest Invoices
                </div>
                <div class="card-body" style="max-height: 300px; overflow-y: auto;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">#INV001 - $50.00 - Paid</li> {{-- Placeholder --}}
                        <li class="list-group-item">#INV002 - $75.00 - Unpaid</li> {{-- Placeholder --}}
                        <li class="list-group-item">#INV003 - $25.00 - Paid</li> {{-- Placeholder --}}
                        <li class="list-group-item">#INV004 - $100.00 - Overdue</li> {{-- Placeholder --}}
                        <li class="list-group-item">#INV005 - $50.00 - Paid</li> {{-- Placeholder --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
