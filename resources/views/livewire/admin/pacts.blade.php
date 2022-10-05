@section('title', __('words.pacts'))

<div class="container-fluid">

    <div class="row">

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
                        <a href="{{ route('admin.dashboard.pacts') }}" class="nav-link active" href="#">
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

        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4 offset-md-2">
            <div class="col-md-3 col-sm-5 ">
                <a href="{{ route('admin.pact.add') }}" class="btn btn-primary">{{ __('words.addpact') }} <i
                        class="fa fa-plus"></i> </a>
            </div>
            <div class="row mt-2">
                <div class="col-12 mb-4">
                    <div class="card mt-5">
                            <div wire:loading>

                                Processing ...

                            </div>

                            <div class="table-responsive">
                                @if (session()->has('showP'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Pact Successfully Added</strong>
                                        <button type="button" class="btn btnClose" data-bs-dismiss="alert"
                                            aria-label="Close"><i class="fa fa-close"></i> </button>
                                    </div>
                                @endif

                                @if (session()->has('pactUpdated'))
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                        <strong>Pact Successfully Updated</strong>
                                        <button type="button" class="btn btnClose" data-bs-dismiss="alert"
                                            aria-label="Close"><i class="fa fa-close"></i> </button>
                                    </div>
                                @endif

                                @if (session()->has('pactDeleted'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Pact Successfully Deleted</strong>
                                        <button type="button" class="btn btnClose" data-bs-dismiss="alert"
                                            aria-label="Close"><i class="fa fa-close"></i></button>
                                    </div>
                                @endif

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">{{ __('words.serialNumber') }}</th>
                                            <th scope="col">{{ __('words.type') }}</th>
                                            <th scope="col">{{ __('words.model') }}</th>
                                            <th scope="col">{{ __('words.accessoar') }}</th>
                                            <th scope="col">{{ __('words.status') }}</th>
                                            <th scope="col">{{ __('words.createdAt') }}</th>
                                            <th scope="col">{{ __('words.option') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pactsPag as $pact)
                                            <tr>
                                                <td>{{ $pact->serial_number }}</td>
                                                <td>{{ $pact->translate(app()->getLocale())->type }}</td>
                                                <td>{{ $pact->translate(app()->getLocale())->model }}</td>
                                                <td>{{ $pact->translate(app()->getLocale())->accessoar }}</td>
                                                <td>{{ $pact->translate(app()->getLocale())->status }}</td>
                                                <td>{{ $pact->created_at }} |
                                                    {{ $pact->created_at->diffForHumans() }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-danger mr-2 option-btn"
                                                            wire:click='delete({{ $pact }})'>
                                                            <i class="fa fa-trash"> </i>
                                                        </button>

                                                        <a href="{{ route('admin.pact.edit', $pact) }}"
                                                            class="btn btn-primary mr-2 option-btn">
                                                            <i class="fa fa-edit"></i>
                                                        </a>

                                                        <a href="{{ route('admin.dashboard.pact.details', $pact) }}"
                                                            class="btn btn-warning option-btn">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    {!! $pactsPag->links() !!}
                                </table>
                                {!! $pactsPag->links() !!}

                            </div>

                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <!-- Another widget will go here -->
                </div>
            </div>

        </main>
    </div>
</div>
