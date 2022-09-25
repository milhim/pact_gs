@section('profile_style')
@endsection
<div>
    <div class="container bg-white mt-5 mb-5">
        @if ($editForm)
            <div class="card p-3 my-2">
                <div class="card-header my-2">
                    {{ __('words.editUser') }}
                </div>
                <div class="card-body my-3">
                    <form wire:submit.prevent='update'>
                        <div class="row my-2">
                            <div class="col-md-12 my-2">
                                <label class="labels">{{ __('words.phone') }}</label>
                                <input wire:model.lazy='phone' type="text" class="form-control">
                                @error('phone')
                                    <div class="text-danger fs-6">

                                        <span>{{ $message }}</span>

                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-12 my-2">
                                <label class="labels">{{ __('words.email') }}</label>
                                <input wire:model.lazy='email' type="text" class="form-control">
                                @error('email')
                                    <div class="text-danger fs-6">

                                        <span>{{ $message }}</span>

                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-12 my-2">
                                <label class="labels">{{ __('words.password') }}</label>
                                <input wire:model.lazy='password' type="password" class="form-control">
                                @error('password')
                                    <div class="text-danger fs-6">

                                        <span>{{ $message }}</span>

                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-12 my-2">
                                <label class="labels">{{ __('words.password_confirmation') }}</label>
                                <input wire:model.lazy='passwordConfirmation' type="password" class="form-control">

                            </div>

                            <button class="btn btn-primary justify-content-end">{{ __('words.save') }}</button>
                    </form>
                </div>
                <div class="card-footer">

                </div>
            </div>
        @endif

        <div class="row">

            <div class="col-md-4 ">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold">{{ auth()->user()->name }}</span><span
                        class="text-black-50">{{ auth()->user()->email }}</span><span>
                    </span>
                    <button wire:click='showEditForm'
                        class="mt-3 d-block btn btn-primary">{{ __('words.edit') }}</button>
                </div>

            </div>
            <div class="col-md-8">
                <div class="row p-3 py-5 d-flex flex-col align-content-between">
                    <ul class="list-group col-md-6 col-sm-6">
                        <li class="list-group-item my-2 p-2">{{ __('words.empnumber') }}</li>
                        <li class="list-group-item my-2 p-2">{{ __('words.username') }}</li>
                        <li class="list-group-item my-2 p-2">{{ __('words.name') }}</li>
                        <li class="list-group-item my-2 p-2">{{ __('words.email') }}</li>
                        <li class="list-group-item my-2 p-2">{{ __('words.phone') }}</li>
                        <li class="list-group-item my-2 p-2">{{ __('words.city') }}</li>
                        <li class="list-group-item my-2 p-2">{{ __('words.location') }}</li>
                        <li class="list-group-item my-2 p-2">{{ __('words.company') }}</li>
                    </ul>

                    <ul class="list-group col-md-6 col-sm-6">
                        <li class="list-group-item my-2 p-2">{{ auth()->user()->Emp_number }}</li>
                        <li class="list-group-item my-2 p-2">{{ auth()->user()->username }}</li>
                        <li class="list-group-item my-2 p-2">{{ auth()->user()->name }}</li>
                        <li class="list-group-item my-2 p-2">{{ auth()->user()->email }}</li>
                        <li class="list-group-item my-2 p-2">{{ auth()->user()->phone }}</li>
                        <li class="list-group-item my-2 p-2">{{ auth()->user()->city }}</li>
                        <li class="list-group-item my-2 p-2">{{ auth()->user()->location }}</li>
                        <li class="list-group-item my-2 p-2">{{ auth()->user()->company }}</li>

                    </ul>
                </div>
                <div>
                    @if ($saved)
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            {{ __('words.saveSuccess') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @livewire('banner')
</div>
