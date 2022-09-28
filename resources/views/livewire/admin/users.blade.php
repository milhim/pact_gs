<div class="container-fluid">

    <nav id="sidebar" class="col-md-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-md-5">
            <ul class="nav flex-column">

                <li class="nav-item">
                    <a href="#"  class="nav-link active" aria-current="page" href="#users">
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
                    <a  href="{{route('admin.dashboard.pacts')}}" class="nav-link" href="#">
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
                    <a  href="{{route('admin.dashboard.banner')}}" class="nav-link" href="#">
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

    <div class="row">
        @if ($usersTable)
            <div class="col-3  offset-2">
                <button wire:click='showAddUserForm' class="btn btn-block btn-primary">{{ __('words.adduser') }}</button>
            </div>
        @endif

    </div>

    <div class="row ">
        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
            @if ($editForm)
                @livewire('admin.user.edit-user', ['user' => $user])
            @endif

            @if ($addUserForm)
                @livewire('admin.user.add-user')
            @endif

            @if ($usersTable)
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card">
                            <h5 class="card-header">{{ __('words.users') }}</h5>
                            <div class="card-body">
                                <div class="table-responsive">

                                    @if (session()->has('userAdded'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>User Successfully Added</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    @if (session()->has('userUpdated'))
                                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                            <strong>User Successfully Updated</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    @if (session()->has('userDeleted'))
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>User Successfully Deleted</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    {{-- <div class="toast bg-success bg-opacity-100  show fixed-bottom" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-header bg-success">
                                            <strong class="me-auto text-white">Info</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body fw-bold ">
                                            User Successfully Added
                                        </div>
                                    </div> --}}
                                    <div wire:loading>

                                        Processing ...

                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">{{ __('words.empnumber') }}</th>
                                                <th scope="col">{{ __('words.name') }}</th>
                                                <th scope="col">{{ __('words.username') }}</th>
                                                <th scope="col">{{ __('words.email') }}</th>
                                                <th scope="col">{{ __('words.phone') }}</th>
                                                <th scope="col">{{ __('words.company') }}</th>
                                                <th scope="col">{{ __('words.city') }}</th>
                                                <th scope="col">{{ __('words.location') }}</th>
                                                <th scope="col">{{ __('words.createdAt') }}</th>
                                                <th scope="col">{{ __('words.option') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($usersPaginate as $user)
                                                <tr>
                                                    <td>{{ $user->Emp_number }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->username }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->phone }}</td>
                                                    <td>{{ $user->company }}</td>
                                                    <td>{{ $user->city }}</td>
                                                    <td>{{ $user->location }}</td>
                                                    <td>{{ $user->created_at }} |
                                                        {{ $user->created_at->diffForHumans() }}</td>

                                                    <td>
                                                        <button wire:click='delete({{ $user }})'
                                                            class="btn btn-danger">{{ __('words.deleteUser') }}</button>
                                                        <button wire:click='showEditForm({{ $user }})'
                                                            class="btn btn-secondary">{{ __('words.editUser') }}</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        {!! $usersPaginate->links() !!}
                                    </table>
                                    {!! $usersPaginate->links() !!}

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <!-- Another widget will go here -->
                    </div>
                </div>
            @endif
        </main>
    </div>
</div>
