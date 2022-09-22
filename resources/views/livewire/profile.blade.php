@section('profile_style')
@endsection

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                    width="150px"
                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                    class="font-weight-bold">{{ auth()->user()->name }}</span><span
                    class="text-black-50">{{ auth()->user()->email }}</span><span>
                </span></div>

        </div>
        <div class="col-md-8">
            <div class="p-3 py-5">
                <form wire:submit.prevent='update'>
                    <div>
                        @if ($saved)
                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                    update success
                            </div>
                        @endif
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row my-2">
                        <div class="col-md-12">
                            <label class="labels">Name</label>
                            <input wire:model.lazy='name' type="text" class="form-control">
                            @error('name')
                                <div class="text-danger fs-6">

                                    <span>{{ $message }}</span>

                                </div>
                            @enderror
                        </div>
                        <div class="row my-3">
                            <div class="col-md-12">
                                <label class="labels">Email</label>
                                <input wire:model.lazy='email' type="text" class="form-control">
                                @error('email')
                                    <div class="text-danger fs-6">

                                        <span>{{ $message }}</span>

                                    </div>
                                @enderror
                            </div>

                        </div>
                        <hr>
                        <button class="btn btn-primary justify-content-end">Save</button>
                </form>

            </div>
        </div>

    </div>
</div>
</div>
</div>
