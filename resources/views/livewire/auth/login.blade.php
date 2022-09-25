<div class="container p-2">
    <div class="row p-2">
        <div class="col-md-6 p-2 offset-md-3 col-sm-10 offset-sm-1">
            <div class="card">
                <div class="card-header">{{__('words.login')}}</div>
                <div class="card-body">
                  

                    <form wire:submit.prevent='login'>


                        <div class="form-group">
                            <label for="email">{{__('words.email')}}</label>
                            <input class="form-control @error('name') border-danger border-2  @enderror"
                                wire:model="email" type="email" id="email" name="email">
                            @error('email')
                                <div class="text-danger fs-6">

                                    <span>{{ $message }}</span>

                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password ">{{__('words.password')}}</label>
                            <input class="form-control @error('name') border-danger border-2  @enderror"
                                wire:model.lazy="password" type="password" id="password" name="password">
                            @error('password')
                                <div class="text-danger fs-6">

                                    <span>{{ $message }}</span>

                                </div>
                            @enderror
                        </div>
                        <div class="form-group my-2">
                            <input type="submit" class="btn btn-primary form-control" value="{{__('words.login')}}">
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
