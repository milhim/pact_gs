@section('dashboard_style')
@endsection


<div class="container-fluid">
    <div class="row">
        <div class="col-3  offset-2">
             <a href="{{route('admin.user.add')}}" wire:click='showAddUserForm' class="btn btn-block btn-primary">Add User</a>
        </div>
    </div>

    <div class="row ">

        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">


            {{-- <div class="row my-4">
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="card">
                        <h5 class="card-header">Customers</h5>
                        <div class="card-body">
                            <h5 class="card-title">345k</h5>
                            <p class="card-text">Feb 1 - Apr 1, United States</p>
                            <p class="card-text text-success">18.2% increase since last month</p>
                        </div>
                    </div>
                </div>

            </div> --}}

            {{-- @if ($userForm)
                @livewire('admin.user.add-user')
            @endif --}}
            @if ($editForm)
            @livewire('admin.user.edit-user',['user'=>$user])
        @endif


            <div class="row">

                <div class="col-12 mb-4">
                    <div class="card">
                        <h5 class="card-header">Users</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">UserName</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Company</th>
                                            <th scope="col">City</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Option</th>

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
                                                    <button wire:click='delete({{$user}})'  class="btn btn-danger" >Delete</button>
                                                    <button wire:click='showEditForm({{$user}})' class="btn btn-secondary">Edit</button>
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
