@section('title', __('words.pacts'))

<div class="container-fluid ">
    <div class="row my-2">
        <nav id="sidebar" class="col-md-2 d-md-block bg-light sidebar  collapse">
            <div class="position-sticky pt-md-5">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard.users') }}" class="nav-link" aria-current="page" href="#users">
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
                        <a href="{{ route('admin.dashboard.pacts') }}"
                            class="nav-link active" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V9l-7-7z" />
                                <path d="M13 3v6h6" />
                            </svg>
                            <span class="ml-2 text-white">{{ __('words.pacts') }}</span>
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
        <div class="col-md-8 offset-md-3 offset-sm-1 p-2 col-sm-8 ">
            <a href="{{ route('admin.dashboard.pacts') }}" class="btn btn-warning mb-3">
                <i  class="fa fa-arrow-left"></i>
                {{ __('words.back') }}</a>
            <div class="row p-3 py-5 d-flex flex-col align-content-between bg-light">

                <div class=" col-md-4 col-sm-6">
                    <p class=" my-2 p-2">{{ __('words.serialNumber') }} :</p>
                    <hr>
                    <p class=" my-2 p-2">{{ __('words.type') }} :</p>
                    <hr>
                    <p class=" my-2 p-2">{{ __('words.model') }} :</p>
                    <hr>
                    <p class=" my-2 p-2">{{ __('words.accessoar') }} :</p>
                    <hr>
                    <p class=" my-2 p-2">{{ __('words.noteOne') }} :</p>
                    <hr>
                    <p class=" my-2 p-2">{{ __('words.noteTwo') }} :</p>
                    <hr>
                    <p class=" my-2 p-2">{{ __('words.status') }} :</p>
                    <hr>
                    <p class=" my-2 p-2">{{ __('words.createdAt') }} :</p>
                    <hr>
                    <p class=" my-2 p-2">{{ __('words.users') }} :</p>
                    <hr>

                </div>

                <div class=" col-md-4 col-sm-6">
                    <p class=" my-2 p-2">{{ $pact->serial_number }}</p>
                    <hr>
                    <p class=" my-2 p-2">{{ $pact->translate(app()->getLocale())->type }}</p>
                    <hr>
                    <p class=" my-2 p-2">{{ $pact->translate(app()->getLocale())->model }}</p>
                    <hr>
                    <p class=" my-2 p-2">{{ $pact->translate(app()->getLocale())->accessoar }}</p>
                    <hr>
                    <p class=" my-2 p-2">{{ $pact->translate(app()->getLocale())->noteOne }}</p>
                    <hr>
                    <p class=" my-2 p-2">{{ $pact->translate(app()->getLocale())->noteTwo }}</p>
                    <hr>
                    <p class=" my-2 p-2">{{ $pact->translate(app()->getLocale())->status }}</p>
                    <hr>
                    <p class=" my-2 p-2">{{ $pact->created_at }} |
                        {{ $pact->created_at->diffForHumans() }}</p>
                    <hr>
                    <p class="my-2 p-2">
                        <ul class=" list-group list-group-item-info">
                            @foreach ($pact->users as $user)
                                <li class="list-group-item">
                                    {{ $user->name }}</li>
                            @endforeach
                        </ul>
                    </p>
                    
                    <hr>


                </div>
            </div>


        </div>
    </div>
</div>
