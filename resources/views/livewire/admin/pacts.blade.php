<div class="container-fluid">
    <div class="row">
        <div class="col-3  offset-2">
            <a href="{{ route('admin.pact.add') }}" class="btn btn-block btn-primary">{{ __('words.addpact') }}</a>
        </div>
    </div>

    <div class="row ">

        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
            @if ($editForm)
                @livewire('admin.pact.edit-pact', ['pact' => $pact])
            @endif

            <div class="row">

                <div class="col-12 mb-4">
                    <div class="card">
                        <h5 class="card-header">{{ __('words.pacts') }}</h5>
                        <div class="card-body">
                            <div class="table-responsive">
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
                                            <th scope="col">{{ __('words.option') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pacts as $pact)
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
                                                            <li class="list-group-item">{{$user->Emp_number .' - '. $user->name}}</li>
                                                        @endforeach
                                                    </ul>
                                                </td>
                                                <td>
                                                    <button wire:click='delete({{ $pact }})'
                                                        class="btn btn-danger">{{ __('words.deletePact') }}</button>
                                                    <button wire:click='showEditForm({{ $pact }})'
                                                        class="btn btn-secondary">{{ __('words.editPact') }}</button>
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
