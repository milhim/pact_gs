@section('title',__('words.login'))

<div class="container p-2">
    <div class="row p-2">
        <div class="col-md-6 p-2 offset-md-3 col-sm-10 offset-sm-1">
            <div class="card">
                <div class="card-header">{{__('words.login')}}</div>
                <div class="card-body">
                    @if ($errors->has('wrongUserInfo'))
                        <div class="alert alert-danger">
                            Wrong username or password
                        </div>
                    @endif


                    <form wire:submit.prevent='login'>


                        <div class="form-group">
                            <label for="username">{{__('words.username')}}</label>
                            <input class="form-control"
                                wire:model="username" type="text" id="username" name="username">
                    
                        </div>

                        <div class="form-group">
                            <label for="password ">{{__('words.password')}}</label>
                            <input class="form-control"
                                wire:model.lazy="password" type="password" id="password" name="password">
                         
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
