<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name'))</title>

    @if (!empty($vue))
        <!-- Vue Global -->
        <script src="https://unpkg.com/vue@3/dist/vue.global{{ config('app.env') === 'production' ? '.prod' : '' }}.js">
        </script>
    @endif

    <!-- Favicon -->
    <link rel="shortuct icon" href="{{ url('favicon.ico') }}" type="image/x-icon" />

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="{{ theme('css/bootstrap.min.css') }}" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ theme('fontawesome/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ theme('fontawesome/css/brands.min.css') }}" />
    <link rel="stylesheet" href="{{ theme('fontawesome/css/solid.min.css') }}" />

    <!-- Stylesheets -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap" />
    <link rel="stylesheet" href="{{ theme('css/app.css') }}" />

    <!-- Other Stacks -->
    @stack('head')
</head>

<body>
    <div id="app" class="d-flex flex-column min-vh-100">
        <!-- Header: Logo and Authentication -->
        <header class="py-3">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Logo with increased space -->
                    <div class="col-6">
                        <a class="navbar-brand logo fs-4" href="{{ url('/') }}">
                            @if (config('app.name') === 'LibreBill')
                                <img src="{{ theme('images/logo.svg') }}" alt="{{ config('app.name') }}" />
                            @else
                                {{ config('app.name') }}
                            @endif
                        </a>
                    </div>
                    <!-- Authentication Buttons -->
                    <div class="col-6 text-end">
                        @guest
                            <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm me-2">Sign In</a>
                            <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Register</a>
                        @else
                            <div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button"
                                    id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-fw fa-user me-2"></i>{{ auth()->user()->email }}
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa-solid fa-fw fa-user-circle me-2"></i>My Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                            @csrf
                                            <button type="submit" class="dropdown-item"><i
                                                    class="fa-solid fa-fw fa-sign-out-alt me-2"></i>Sign Out</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </header>

        @if (auth()->check())
            <!-- Navigation: Responsive Menu -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary border-top border-bottom">
                <div class="container">
                    <!-- Brand is hidden on larger screens, but can be shown if needed -->
                    <span class="navbar-brand d-lg-none"></span>

                    <!-- Hamburger button moved to the right -->
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            @include('navigation.authenticated')
                        </ul>
                    </div>
                </div>
            </nav>
        @endif

        <!-- Content -->
        <main class="py-4 flex-grow-1 d-flex flex-column justify-content-center">
            <div class="container">
                @if (auth()->check())
                    <div class="container-fluid">
                        @hasSection('breadcrumbs')
                            <div class="row">
                                <div class="col-12">
                                    <nav class="bread" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            @yield('breadcrumbs')
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <!-- Sidebar -->
                            <div class="col-lg-3 mb-4">
                                @include('navigation.user-sidebar')
                            </div>

                            <!-- Main Content -->
                            <div class="col-lg-9">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                @else
                    @yield('content')
                @endif
            </div>
        </main>

        <!-- Footer -->
        <footer class="py-4 bg-light mt-auto">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <div class="text-muted text-center text-md-start">
                            Copyright &copy; {{ date('Y') }} {{ config('app.name') }}
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Powered by <a href="https://librebill.org" target="_blank"
                            class="text-decoration-none text-muted">LibreBill</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="{{ theme('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom Script -->
    <script src="{{ theme('js/app.js') }}"></script>

    @stack('scripts')
</body>

</html>
