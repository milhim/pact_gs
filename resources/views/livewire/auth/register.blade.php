    <div class="container p-2">
        <div class="row p-2">
            <div class="col-md-6 p-2 offset-md-3 col-sm-10 offset-sm-1">
                <div class="card">
                    <div class="card-header">Registeration Form</div>
                    <div class="card-body">
                        <form wire:submit.prevent='register'>
                            <div class="form-group">
                                <label for="name">name</label>
                                <input class="form-control  @error('name') border-danger border-2  @enderror"
                                    wire:model.lazy="name" type="text" id="name" name="name">
                                @error('name')
                                    <div class="text-danger fs-6">

                                        <span>{{ $message }}</span>

                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">email</label>
                                <input class="form-control @error('name') border-danger border-2  @enderror"
                                    wire:model="email" type="email" id="email" name="email">
                                @error('email')
                                    <div class="text-danger fs-6">

                                        <span>{{ $message }}</span>

                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password ">password</label>
                                <input class="form-control @error('name') border-danger border-2  @enderror"
                                    wire:model.lazy="password" type="password" id="password" name="password">
                                @error('password')
                                    <div class="text-danger fs-6">

                                        <span>{{ $message }}</span>

                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">password confirmation</label>
                                <input class="form-control" wire:model.lazy="passwordConfirmation" type="password"
                                    id="passwordConfirmation" name="passwordConfirmation">
                            </div>

                            <div class="form-group my-2">
                                <input type="submit" class="btn btn-primary form-control" value="Register">
                            </div>


                        </form>

                    </div>
                    <div class="card-footer fs-6 ">
                        Allready have an account? <a class="nav-link d-inline" href="/login">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
