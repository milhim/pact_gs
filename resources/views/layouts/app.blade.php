<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    @livewireStyles

    <style>
        .btn-primary {
            border-color: #312E81;
            background-color: #5B21B6;
        }

        .btn-primary:hover {
            background-color: #4338CA;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/dashboard_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile_style.css') }}">

    <title>Pact</title>
</head>

<body>


    <nav class="navbar navbar-light bg-light p-3">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <a class="navbar-brand" href="#">
                {{ __('words.pact') }}
            </a>
            @auth('web')
                <a class="nav-link " href="{{ route('user.home') }}">{{ __('words.home') }}</a>
            @endauth
            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse"
                data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <ul class="navbar-nav">



            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    {{ Config::get('languages')[App::getLocale()] }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{ $language }}</a>
                        @endif
                    @endforeach
                </div>
            </li>

        </ul>
        <div class="col-2 d-flex align-items-center justify-content-evenly mt-3">
            <div class="dropdown">
                @auth()
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </button>
                @endauth

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @if (auth('webadmin')->user())
                        <li>
                            <a class="dropdown-item " href="{{ route('admin.logout') }}">{{ __('words.signout') }}</a>
                        </li>
                    @endif
                    @if (auth('web')->user())
                        <li>
                            <a class="dropdown-item " href="{{ route('user.profile') }}">{{ __('words.profile') }}</a>
                        </li>
                        <li>
                            <a class="dropdown-item " href="{{ route('user.logout') }}">{{ __('words.signout') }}</a>
                        </li>
                    @endif
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

   
    @livewireScripts

</body>

</html>
