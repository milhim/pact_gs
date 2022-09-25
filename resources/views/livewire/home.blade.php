<div class="">
    <div class="container ">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12 offset-sm-0">

                <div class="row p-3 d-flex flex-col align-content-between">
                    <ul class="list-group col-md-6 col-sm-6">
                        <li class="list-group-item  p-2">{{ __('words.empnumber') }}</li>
                        <li class="list-group-item  p-2">{{ __('words.name') }}</li>
                        <li class="list-group-item  p-2">{{ __('words.city') }}</li>
                        <li class="list-group-item  p-2">{{ __('words.location') }}</li>
                        <li class="list-group-item  p-2">{{ __('words.company') }}</li>
                    </ul>

                    <ul class="list-group col-md-6 col-sm-6">
                        <li class="list-group-item  p-2">{{ auth()->user()->Emp_number }}</li>
                        <li class="list-group-item  p-2">{{ auth()->user()->name }}</li>
                        <li class="list-group-item  p-2">{{ auth()->user()->city }}</li>
                        <li class="list-group-item  p-2">{{ auth()->user()->location }}</li>
                        <li class="list-group-item  p-2">{{ auth()->user()->company }}</li>

                    </ul>
                </div>

                <button wire:click='showPactsPage'
                    class="btn btn-success d-block m-auto">{{ __('words.myPacts') }}</button>
                <div class=" m-4">
                    @if ($pactsPage)
                        @livewire('pacts')
                    @endif
                </div>
            </div>
        </div>

    </div>

    @livewire('banner', key(Str::random()))
</div>
