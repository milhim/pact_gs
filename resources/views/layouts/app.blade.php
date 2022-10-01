<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" @if (app()->getLocale() === 'ar') dir="rtl" @endif>

<head>
    @if (app()->getLocale() === 'en')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
            integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    @endif

    <link rel="stylesheet" href="{{ asset('css/dashboard_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile_style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    @if (app()->getLocale() === 'ar')
        <link rel="stylesheet" href="{{ asset('css/bootstrap-rtl.min.css') }}">
    @endif

    <style>
        .btn-primary {
            font-size: 18px;
            border-color: #78c4cc9c;
            background-color: #43a9b4;
            font-weight: bold;
            color: rgb(231, 236, 236)
        }

        .btn-primary:hover {
            background-color: #4338CA;
        }
    </style>
    @livewireStyles

    <title>{{ __('words.pact') }}</title>

</head>

<body
    style="  background: rgb(94, 124, 201) !important;
background: linear-gradient(90deg, rgba(94, 124, 201, 1) 34%, rgba(169, 220, 227, 1) 100%) !important;">

    <nav class="navbar navbar-light bg-light p-2 mb-4 ">
        <div class="d-flex  col-md-4 col-sm-4 mb-2 flex-wrap flex-md-nowrap justify-content-between">
            <a class="navbar-brand" href="#">
                {{ __('words.pact') }}
            </a>
            @auth('web')
                <a class="nav-link " href="{{ route('user.home') }}">{{ __('words.home') }}</a>
            @endauth
            @auth('webadmin')
                <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse"
                    data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            @endauth

        </div>
        <ul class="navbar-nav col-md-3 col-sm-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    {{ Config::get('languages')[App::getLocale()] }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">
                                {{ $language }}</a>
                        @endif
                    @endforeach
                </div>
            </li>

        </ul>

        <div class="col-md-3  col-sm-3 d-flex align-items-center justify-content-evenly mt-3">
            <div class="dropdown">
                @auth()
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </button>
                @endauth

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @auth('webadmin')
                        <li>
                            <a class="dropdown-item " href="{{ route('admin.logout') }}">{{ __('words.signout') }}</a>
                        </li>
                    @endauth
                    @auth('web')
                        <li>
                            <a class="dropdown-item " href="{{ route('user.profile') }}">{{ __('words.profile') }}</a>
                        </li>
                        <li>
                            <a class="dropdown-item " href="{{ route('user.logout') }}">{{ __('words.signout') }}</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>



    {{ $slot }}




    {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> <!-- MDB -->

    @stack('scripts')
    @livewireScripts

</body>

</html>
