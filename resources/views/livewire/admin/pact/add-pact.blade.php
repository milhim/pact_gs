<div class="container p-2">
    <div class="row p-2">
        <div class="col-md-6 p-2 offset-md-3 col-sm-10 offset-sm-1">
            <div class="card">
                <div class="card-header">{{ __('words.addpact') }} <nav class="nav navbar">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a style="cursor: pointer" wire:click='showEnglishForm' class="nav-link" >English</a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer" wire:click='showArabicForm' class="nav-link" >العربية</a>
                        </li>
                    </ul>
                       
                </div>
                <div class="card-body">

                    <form wire:submit.prevent='register'>

                        <div class="form-group">
                            <label for="serialNumber">{{ __('words.serialNumber') }}</label>
                            <input
                                class="form-control  @error('serialNumber') border-danger border-2  @enderror"
                                wire:model.lazy="serialNumber" type="text" id="serialNumber">
                            @error('serialNumber')
                                <div class="text-danger fs-6">

                                    <span>{{ $message }}</span>

                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="users">{{ __('words.users') }}</label>
                            <select wire:model="selectedUsers" multiple>
                                @foreach ($users as $user)
                                    @if ($user)
                                        <option value="{{ $user->id }}">
                                            {{ $user->Emp_number . '-' . $user->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('users')
                                <div class="text-danger fs-6">

                                    <span>{{ $message }}</span>

                                </div>
                            @enderror
                        </div>

                        {{-- ---------------------  English form---------------- --}}
                        @if ($englishForm)


                            <div class="english-form">
                      
                                <div class="form-group">
                                    <label for="type">{{ __('words.type') }}</label>
                                    <input class="form-control  @error('type') border-danger border-2  @enderror"
                                        wire:model.lazy="en_type" type="text" id="type">
                                    @error('type')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="model">{{ __('words.model') }}</label>
                                    <input class="form-control @error('model') border-danger border-2  @enderror"
                                        wire:model.lazy="en_model" type="model" id="model">
                                    @error('model')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="accessoar ">{{ __('words.accessoar') }}</label>
                                    <input class="form-control @error('accessoar') border-danger border-2  @enderror"
                                        wire:model.lazy="en_accessoar" type="text" id="accessoar">
                                    @error('accessoar')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="noteOne">{{ __('words.noteOne') }}</label>
                                    <input class="form-control @error('noteOne') border-danger border-2  @enderror"
                                        wire:model.lazy="en_noteOne" type="text" id="noteOne">
                                    @error('noteOne')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="noteTwo">{{ __('words.noteTwo') }}</label>
                                    <input class="form-control @error('noteTwo') border-danger border-2  @enderror"
                                        wire:model.lazy="en_noteTwo" type="noteTwo" id="noteTwo">
                                    @error('noteTwo')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="status">{{ __('words.status') }}</label>
                                    <input class="form-control @error('status') border-danger border-2  @enderror"
                                        wire:model.lazy="en_status" type="status" id="status">
                                    @error('status')
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

                                <div class="form-group">
                                    <label for="type">{{ __('words.type') }}</label>
                                    <input class="form-control  @error('type') border-danger border-2  @enderror"
                                        wire:model.lazy="ar_type" type="text" id="type">
                                    @error('type')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="model">{{ __('words.model') }}</label>
                                    <input class="form-control @error('model') border-danger border-2  @enderror"
                                        wire:model.lazy="ar_model" type="model" id="model">
                                    @error('model')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="accessoar ">{{ __('words.accessoar') }}</label>
                                    <input class="form-control @error('accessoar') border-danger border-2  @enderror"
                                        wire:model.lazy="ar_accessoar" type="text" id="accessoar">
                                    @error('accessoar')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="noteOne">{{ __('words.noteOne') }}</label>
                                    <input class="form-control @error('noteOne') border-danger border-2  @enderror"
                                        wire:model.lazy="ar_noteOne" type="text" id="noteOne">
                                    @error('noteOne')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="noteTwo">{{ __('words.noteTwo') }}</label>
                                    <input class="form-control @error('noteTwo') border-danger border-2  @enderror"
                                        wire:model.lazy="ar_noteTwo" type="noteTwo" id="noteTwo">
                                    @error('noteTwo')
                                        <div class="text-danger fs-6">

                                            <span>{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="status">{{ __('words.status') }}</label>
                                    <input class="form-control @error('status') border-danger border-2  @enderror"
                                        wire:model.lazy="ar_status" type="status" id="status">
                                    @error('status')
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
</div>
