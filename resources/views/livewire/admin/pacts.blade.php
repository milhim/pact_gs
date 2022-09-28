<div class="container-fluid">
        <div class="row">
            <div class="col-3  offset-2">
                <a href="{{ route('admin.pact.add') }}" class="btn btn-block btn-primary">{{ __('words.addpact') }}</a>
            </div>
        </div>
    <div class="row ">

        <nav id="sidebar" class="col-md-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-md-5">
                <ul class="nav flex-column">

              

                    <li class="nav-item">
                        <a href="{{route('admin.dashboard.users')}}"  class="nav-link" aria-current="page" href="#users">
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
                        <a href="{{route('admin.dashboard.pacts')}}" class="nav-link active" href="#">
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
                        <a href="{{route('admin.dashboard.banner')}}" class="nav-link" href="#">
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
        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card">
                            <h5 class="card-header">{{ __('words.pacts') }}</h5>
                            <div class="card-body">
                                <div wire:loading>

                                    Processing ...

                                </div>

                                <div class="table-responsive">
                                    @if (session()->has('showP'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Pact Successfully Added</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    @if (session()->has('pactUpdated'))
                                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                            <strong>Pact Successfully Updated</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    @if (session()->has('pactDeleted'))
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Pact Successfully Deleted</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">{{ __('words.serialNumber') }}</th>
                                                <th scope="col">{{ __('words.type') }}</th>
                                                <th scope="col">{{ __('words.model') }}</th>
                                                <th scope="col">{{ __('words.accessoar') }}</th>
                                                <th scope="col">{{ __('words.noteOne') }}</th>
                                                <th scope="col">{{ __('words.noteTwo') }}</th>
                                                <th scope="col">{{ __('words.status') }}</th>
                                                <th scope="col">{{ __('words.users') }}</th>
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
                                                    <td>{{ $pact->translate(app()->getLocale())->noteOne }}</td>
                                                    <td>{{ $pact->translate(app()->getLocale())->noteTwo }}</td>
                                                    <td>{{ $pact->translate(app()->getLocale())->status }}</td>
                                                    <td>
                                                        <ul class="list-group list-group-item-info">
                                                            @foreach ($pact->users as $user)
                                                                <li class="list-group-item">
                                                                    {{ $user->name }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </td>
                                                    <td>{{ $user->created_at }} |
                                                        {{ $user->created_at->diffForHumans() }}</td>

                                                    <td>
                                                        <button wire:click='delete({{ $pact }})'
                                                            class="btn btn-danger">{{ __('words.deletePact') }}</button>
                                                        <a href="{{ route('admin.pact.edit', $pact) }}"
                                                            class="btn btn-secondary">{{ __('words.editPact') }}</a>
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
                    </div>
                    <div class="col-12 col-xl-4">
                        <!-- Another widget will go here -->
                    </div>
                </div>

        </main>
    </div>
</div>
