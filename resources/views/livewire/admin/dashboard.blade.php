@section('dashboard_style')
@endsection

@section('title', __('words.dashboard'))


<div class="container-fluid">
    <div class="row">
        <nav id="sidebar" class="col-md-2 d-md-block bg-light sidebar collapse"
            @if (app()->getLocale() === 'ar') style="margin-top: -150px" @endif>
            <div class="position-sticky pt-md-5">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard.users') }}" class="nav-link " aria-current="page">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <span class="ml-2">{{ __('words.users') }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard.pacts') }}" class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-file">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                <polyline points="13 2 13 9 20 9"></polyline>
                            </svg>
                            <span class="ml-2">{{ __('words.pacts') }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard.banner') }}" class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="2" />
                                <path d="M3 15h18" />
                            </svg>
                            <span class="ml-2">{{ __('words.banner') }}</span>
                        </a>
                </ul>
            </div>
        </nav>
        <main class="col-md-8 ml-sm-auto px-md-4 py-4" style="height: 600px">

            <div class="row mt-5">
                <a class="blocks col-md-4 col-sm-10 mx-md-3  my-sm-3 offset-sm-1"
                    href="{{ route('admin.dashboard.users') }}">
                    Users
                </a>

                <a class="blocks col-md-4 col-sm-10 mx-md-3  my-sm-3 offset-sm-1"
                    href="{{ route('admin.dashboard.pacts') }}">
                    Pacts
                </a>
            </div>

        </main>
    </div>
</div>
