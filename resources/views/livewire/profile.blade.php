@section('profile_style')
@endsection
@section('title', __('words.profile'))

<div>
    <div class="container bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 ">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold">{{ auth()->user()->name }}</span><span
                        class="text-black-50">{{ auth()->user()->email }}</span><span>
                    </span>
                    <!-- Button trigger modal -->
                    <button class="mt-3 d-block btn btn-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#editUser">
                        {{ __('words.edit') }}
                    </button>


                </div>

            </div>
            <div class="col-md-8">
                <div class="row p-3 py-5 d-flex flex-col align-content-between">

                    <div class=" col-md-4 col-sm-6">
                        <p class=" my-2 p-2">{{ __('words.name') }} :</p>
                        <p class=" my-2 p-2">{{ __('words.username') }} :</p>
                        <p class=" my-2 p-2">{{ __('words.email') }} :</p>
                        <p class=" my-2 p-2">{{ __('words.phone') }} :</p>
                        <p class=" my-2 p-2">{{ __('words.empnumber') }} :</p>
                        <p class=" my-2 p-2">{{ __('words.city') }} :</p>
                        <p class=" my-2 p-2">{{ __('words.location') }} :</p>
                        <p class=" my-2 p-2">{{ __('words.company') }} :</p>
                    </div>

                    <div class=" col-md-6 col-sm-6">
                        <p class=" my-2 p-2">{{ auth()->user()->name }}</p>
                        <p class=" my-2 p-2">{{ auth()->user()->username }}</p>
                        <p class=" my-2 p-2">{{ auth()->user()->email }}</p>
                        <p class=" my-2 p-2">{{ auth()->user()->phone }}</p>
                        <p class=" my-2 p-2">{{ auth()->user()->Emp_number }}</p>
                        <p class=" my-2 p-2">{{ auth()->user()->city }}</p>
                        <p class=" my-2 p-2">{{ auth()->user()->location }}</p>
                        <p class=" my-2 p-2">{{ auth()->user()->company }}</p>

                    </div>
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
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="editUser" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('words.editUserInfo') }}</h5>
                    <i type="button" class="btn fa fa-close" data-bs-dismiss="modal" aria-label="Close"></i>
                </div>
                <div class="modal-body">
                    <div class="card p-3 my-2">
                        <div class="card-header">
                            {{ __('words.editUserInfo') }}
                        </div>
                        <div class="card-body my-3">
                            <form wire:submit.prevent='updateInfo'>
                                <div class="form-group my-2">
                                    <label for="phone" class="">{{ __('words.phone') }}</label>
                                    <input id="phone" wire:model.lazy='phone' type="text" class="form-control">
                                    @error('phone')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group my-2">
                                    <label for="email" class="">{{ __('words.email') }}</label>
                                    <input id="email" wire:model.lazy='email' type="text" class="form-control">
                                    @error('email')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>

                                <button type="submit"
                                    class="btn btn-primary justify-content-end">{{ __('words.save') }}</button>
                            </form>
                        </div>
                    </div>
                    <div class="card p-3 my-2 ">
                        <div class="card-header">
                            {{ __('words.editUserPass') }}
                        </div>
                        <div class="card-body my-3">
                            <form wire:submit.prevent='updatePass'>
                                <div class="form-group my-2">
                                    <label for="password" class="">{{ __('words.password') }}</label>
                                    <input id="password" wire:model.lazy='password' type="password" class="form-control">
                                    @error('password')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group my-2">
                                    <label for="password_confirmation" class="">{{ __('words.password_confirmation') }}</label>
                                    <input id="password_confirmation" wire:model.lazy='passwordConfirmation' type="password" class="form-control">
                                </div>
                                <button type="submit"
                                    class="btn btn-primary justify-content-end">{{ __('words.save') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script type="text/javascript">
    window.livewire.on('closeModal', () => {
        $('#editUser').modal('hide');
    });
</script>
@endpush
