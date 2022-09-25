<div class="container p-2">
    <div class="row p-2">
        <div class="col-md-6 p-2 offset-md-3 col-sm-10 offset-sm-1">
            <div class="card">
                <div class="card-header">{{ __('words.adduser') }}</div>
                <div class="card-body">
                    <form wire:submit.prevent='register'>
                        <div class="row">
                            <div class="col-6">
                                <div class="border-bottom ">
                                    <div class="form-group">
                                        <label for="name">{{ __('words.name') }}</label>
                                        <input class="form-control  @error('name') border-danger border-2  @enderror"
                                            wire:model.lazy="name" type="text" id="name" name="name">
                                        @error('name')
                                            <div class="text-danger fs-6">

                                                <span>{{ $message }}</span>

                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="username">{{ __('words.username') }}</label>
                                        <input
                                            class="form-control  @error('username') border-danger border-2  @enderror"
                                            wire:model.lazy="username" type="text" id="username">
                                        @error('username')
                                            <div class="text-danger fs-6">

                                                <span>{{ $message }}</span>

                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email">{{ __('words.email') }}</label>
                                        <input class="form-control @error('email') border-danger border-2  @enderror"
                                            wire:model.lazy="email" type="email" id="email" name="email">
                                        @error('email')
                                            <div class="text-danger fs-6">

                                                <span>{{ $message }}</span>

                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password ">{{ __('words.password') }}</label>
                                        <input class="form-control @error('password') border-danger border-2  @enderror"
                                            wire:model.lazy="password" type="password" id="password" name="password">
                                        @error('password')
                                            <div class="text-danger fs-6">

                                                <span>{{ $message }}</span>

                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label
                                            for="password_confirmation">{{ __('words.password_confirmation') }}</label>
                                        <input class="form-control" wire:model.lazy="passwordConfirmation"
                                            type="password" id="passwordConfirmation" name="passwordConfirmation">
                                    </div>

                                </div>
                            </div>

                            <div class="col-6">
                                <div class="border-bottom ">
                                    <div class="form-group">
                                        <label for="phone">{{ __('words.phone') }}</label>
                                        <input class="form-control @error('phone') border-danger border-2  @enderror"
                                            wire:model.lazy="phone" type="phone" id="phone">
                                        @error('phone')
                                            <div class="text-danger fs-6">

                                                <span>{{ $message }}</span>

                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="company">{{ __('words.company') }}</label>
                                        <input class="form-control @error('company') border-danger border-2  @enderror"
                                            wire:model.lazy="company" type="company" id="company">
                                        @error('company')
                                            <div class="text-danger fs-6">

                                                <span>{{ $message }}</span>

                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="city">{{ __('words.city') }}</label>
                                        <input class="form-control @error('city') border-danger border-2  @enderror"
                                            wire:model.lazy="city" type="city" id="city">
                                        @error('city')
                                            <div class="text-danger fs-6">

                                                <span>{{ $message }}</span>

                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="location">{{ __('words.location') }}</label>
                                        <input class="form-control @error('location') border-danger border-2  @enderror"
                                            wire:model.lazy="location" type="location" id="location">
                                        @error('location')
                                            <div class="text-danger fs-6">

                                                <span>{{ $message }}</span>

                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="Emp_number">{{ __('words.empnumber') }}</label>
                                        <input type="number"
                                            class="form-control @error('Emp_number') border-danger border-2  @enderror"
                                            wire:model.lazy="Emp_number" type="Emp_number" id="Emp_number">
                                        @error('Emp_number')
                                            <div class="text-danger fs-6">

                                                <span>{{ $message }}</span>

                                            </div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div>



                        <div class="form-group my-2">
                            <input type="submit" class="btn btn-primary form-control"
                                value="{{ __('words.adduser') }}">
                        </div>



                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
