@section('title', __('words.addpact'))


<div class="container-fluid p-2">

    <div class="row p-2 mt-2">

        <nav id="sidebar" class="col-md-2 d-md-block bg-light sidebar  collapse"
            @if (app()->getLocale() === 'ar') style="margin-top: -150px" @endif>
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

        <div class="col-md-8 offset-md-2 offset-sm-1 p-2 col-sm-8 ">
            <a href="{{ route('admin.dashboard.pacts') }}" class="btn btn-warning">
                <i  class="fa fa-arrow-left"></i>

                {{ __('words.back') }}</a>
            <div class="card mt-2">
                <div class="card-header">{{ __('words.addpact') }} <nav class="nav navbar">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a  wire:click='showEnglishForm' class="nav-link">English</a>
                            </li>
                            <li class="nav-item">
                                <a  wire:click='showArabicForm' class="nav-link">العربية</a>
                            </li>
                        </ul>

                </div>
                <div class="card-body">
                    <form wire:submit.prevent='register'>
                        <div class="form-group">
                            <label for="serialNumber">{{ __('words.serialNumber') }}</label>
                            <input class="form-control  @error('serialNumber') border-danger border-2  @enderror"
                                wire:model.defer="serialNumber" type="text" id="serialNumber">
                            @error('serialNumber')
                                <div class="text-danger fs-6">

                                    <span>{{ $message }}</span>

                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="form-group">
                                    <div class="" wire:ignore>
                                        <label for="select2">Users</label>
                                        <select class="form-select select2" wire:model.defer='selectedUsers'
                                            id='select2' multiple>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            @error('selectedUsers')
                                <div class="text-danger fs-6">

                                    <span>{{ $message }}</span>

                                </div>
                            @enderror
                        </div>

                        {{-- ---------------------  English form---------------- --}}
                        @if ($englishForm)
                            <div class="english-form">
                                <div class="ar_errors">
                                    @error('ar_type')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                    @error('ar_model')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                    @error('ar_accessoar')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                    @error('ar_noteOne')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                    @error('ar_noteTwo')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                    @error('ar_status')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="type">{{ __('words.type') }}</label>
                                    <input class="form-control  @error('type') border-danger border-2  @enderror"
                                        wire:model.defer="en_type" type="text" id="type">
                                    @error('en_type')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="model">{{ __('words.model') }}</label>
                                    <input class="form-control @error('model') border-danger border-2  @enderror"
                                        wire:model.defer="en_model" type="model" id="model">
                                    @error('en_model')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="accessoar ">{{ __('words.accessoar') }}</label>
                                    <input class="form-control @error('accessoar') border-danger border-2  @enderror"
                                        wire:model.defer="en_accessoar" type="text" id="accessoar">
                                    @error('en_accessoar')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="noteOne">{{ __('words.noteOne') }}</label>
                                    <input class="form-control @error('noteOne') border-danger border-2  @enderror"
                                        wire:model.defer="en_noteOne" type="text" id="noteOne">
                                    @error('en_noteOne')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="noteTwo">{{ __('words.noteTwo') }}</label>
                                    <input class="form-control @error('noteTwo') border-danger border-2  @enderror"
                                        wire:model.defer="en_noteTwo" type="noteTwo" id="noteTwo">
                                    @error('en_noteTwo')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="status">{{ __('words.status') }}</label>
                                    <input class="form-control @error('status') border-danger border-2  @enderror"
                                        wire:model.defer="en_status" type="status" id="status">
                                    @error('en_status')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>


                            </div>
                        @endif
                        {{-- ---------------------  Arabic form---------------- --}}
                        @if ($arabicForm)
                            <div class="arabic-form">
                                <div class="en_errors">
                                    @error('en_type')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                    @error('en_model')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                    @error('en_accessoar')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                    @error('en_noteOne')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                    @error('en_noteTwo')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                    @error('en_status')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="type">{{ __('words.type') }}</label>
                                    <input class="form-control  @error('type') border-danger border-2  @enderror"
                                        wire:model.defer="ar_type" type="text" id="type">
                                    @error('ar_type')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="model">{{ __('words.model') }}</label>
                                    <input class="form-control @error('model') border-danger border-2  @enderror"
                                        wire:model.defer="ar_model" type="model" id="model">
                                    @error('ar_model')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="accessoar ">{{ __('words.accessoar') }}</label>
                                    <input class="form-control @error('accessoar') border-danger border-2  @enderror"
                                        wire:model.defer="ar_accessoar" type="text" id="accessoar">
                                    @error('ar_accessoar')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="noteOne">{{ __('words.noteOne') }}</label>
                                    <input class="form-control @error('noteOne') border-danger border-2  @enderror"
                                        wire:model.defer="ar_noteOne" type="text" id="noteOne">
                                    @error('ar_noteOne')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="noteTwo">{{ __('words.noteTwo') }}</label>
                                    <input class="form-control @error('noteTwo') border-danger border-2  @enderror"
                                        wire:model.defer="ar_noteTwo" type="noteTwo" id="noteTwo">
                                    @error('ar_noteTwo')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="status">{{ __('words.status') }}</label>
                                    <input class="form-control @error('status') border-danger border-2  @enderror"
                                        wire:model.defer="ar_status" type="status" id="status">
                                    @error('ar_status')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>


                            </div>
                        @endif

                        <div class="form-group my-2">
                            <input type="submit" class="btn btn-primary form-control"
                                value="{{ __('words.addpact') }}">
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#select2').select2();
                $('#select2').on('change', function(e) {
                    var data = $('#select2').select2("val");
                    @this.set('selectedUsers', data);
                });
            });
        </script>
    @endpush
