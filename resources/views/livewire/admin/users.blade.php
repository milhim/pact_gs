<div class="container-fluid">
    <div class="row">
        <div class="col-3  offset-2">
            <a href="{{ route('admin.user.add') }}" wire:click='showAddUserForm'
                class="btn btn-block btn-primary">{{ __('words.adduser') }}</a>
        </div>
    </div>

    <div class="row ">

        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">


            @if ($editForm)
                @livewire('admin.user.edit-user', ['user' => $user])
            @endif


            <div class="row">

                <div class="col-12 mb-4">
                    <div class="card">
                        <h5 class="card-header">{{ __('words.users') }}</h5>
                        <div class="card-body">
                            <div class="table-responsive">
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
                                            <th scope="col">{{ __('words.option') }}</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->Emp_number }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone }}</td>
                                                <td>{{ $user->company }}</td>
                                                <td>{{ $user->city }}</td>
                                                <td>{{ $user->location }}</td>
                                                <td>
                                                    <button wire:click='delete({{ $user }})'
                                                        class="btn btn-danger">{{ __('words.deleteUser') }}</button>
                                                    <button wire:click='showEditForm({{ $user }})'
                                                        class="btn btn-secondary">{{ __('words.editUser') }}</button>
                                                </td>

                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>


                            <a href="#" class="btn btn-block btn-light">View all</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-4">
                    <!-- Another widget will go here -->
                </div>
            </div>




            <footer class="pt-5 d-flex justify-content-between">
                <span>Copyright © 2019-2020 <a href="https://themesberg.com">Themesberg</a></span>
                <ul class="nav m-0">
                    <li class="nav-item">
                        <a class="nav-link text-secondary" aria-current="page" href="#">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Terms and conditions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Contact</a>
                    </li>
                </ul>
            </footer>
        </main>

    </div>
</div>
