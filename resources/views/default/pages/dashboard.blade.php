@extends('default.layouts.generic')

@section('title', 'Dashboard')
{{-- @section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
@endsection --}}

@section('content')
    <div class="row statrow">
        <div class="col-lg-4">
            <div class="card statcard text-center mb-3 mb-lg-0">
                <h1>1</h1>
                <div>Active Services</div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card statcard text-center mb-3 mb-lg-0">
                <h1>0</h1>
                <div>Open Tickets</div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card statcard text-center mb-3 mb-lg-0">
                <h1>0</h1>
                <div>Unpaid Invoices</div>
            </div>
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
    <div class="row">
        <div class="col-lg-6">
            <div class="card dashcard mb-4 mb-lg-0">
                <div class="card-header">
                    Recent Tickets
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <strong>#15063 - Service Down</strong>
                        <div><small>Last update by System Admin on May 20, 2025 08:53 AM</small></div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <strong>#15041 - Refund Request</strong>
                        <div><small>Last update by System Admin on May 18, 2025 04:35 PM</small></div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <strong>#15028 - PHP 5.6 Supported?</strong>
                        <div><small>Last update by System Admin on May 12, 2025 01:23 PM</small></div>
                    </a>
                </div>
                <div class="card-footer text-center">
                    <a href="#">View All Tickets</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card dashcard mb-4 mb-lg-0">
                <div class="card-header">
                    Active Services
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <strong>SVC-10053 - Software Devleopment Project</strong>
                        <div><small>"LIBREBILL" - In Progress (72 out of 1,808 hours)</small></div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <strong>SVC-34562 - Web Hosting (Small)</strong>
                        <div><small>librebill.org</small> - renews on May 20, 2026</div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <strong>SVC-34561 - Domain Registration</strong>
                        <div><small>librebill.org</small> - renews on May 20, 2026</div>
                    </a>
                </div>
                <div class="card-footer text-center">
                    <a href="#">View All Services</a>
                </div>
            </div>
        </div>
        <div class="col mt-0 mt-lg-3">
            <div class="card dashcard mb-4 mb-lg-0">
                <div class="card-header">
                    Recent Invoices
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="float-start">
                            <strong>#INV-01000 - $345.95</strong>
                            <div>Professional Fee for SVC-10053</div>
                        </div>
                        <div class="float-end">
                            <small><span class="badge text-bg-danger">Unpaid</span> <span class="badge text-bg-warning">Due on May 30, 2025</span></small>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="float-start">
                            <strong>#INV-00999 - $15.95</strong>
                            <div>Domain Registration - librebill.org</div>
                        </div>
                        <div class="float-end">
                            <small><span class="badge text-bg-success">Paid</span></small>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="float-start">
                            <strong>#INV-00998 - $48.99</strong>
                            <div>Web Hosting (Small) - librebill.org</div>
                        </div>
                        <div class="float-end">
                            <small><span class="badge text-bg-success">Paid</span></small>
                        </div>
                    </a>
                </div>
                <div class="card-footer text-center">
                    <a href="#">View All Invoices</a>
                </div>
            </div>
        </div>
    </div>
@endsection
