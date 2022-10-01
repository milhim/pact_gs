@section('title', __('words.pacts'))

<div class="row">
    <div class="col-12 mb-4">
        <div class="card">
            <h5 class="card-header">{{ __('words.pacts') }}</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('words.serialNumber') }}</th>
                                <th scope="col">{{ __('words.type') }}</th>
                                <th scope="col">{{ __('words.model') }}</th>
                                <th scope="col">{{ __('words.accessoar') }}</th>
                                <th scope="col">{{ __('words.status') }}</th>
                                <th scope="col">{{ __('words.more') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pacts as $pact)
                                <tr>
                                    <td>{{ $pact->serial_number }}</td>
                                    <td>{{ $pact->translate(app()->getLocale())->type }}</td>
                                    <td>{{ $pact->translate(app()->getLocale())->model }}</td>
                                    <td>{{ $pact->translate(app()->getLocale())->accessoar }}</td>
                                    <td>{{ $pact->translate(app()->getLocale())->status }}</td>
                                    <td>

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#modal{{ $pact->id }}">
                                            <i class="fa fa-eye"></i>
                                        </button>

                                        <div class="modal fade" id="modal{{ $pact->id }}" tabindex="-1"
                                            aria-labelledby="modal{{ $pact->id }}Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            {{ __('words.more') }}</h5>
                                                        <i aria-label="Close" data-bs-dismiss="modal"
                                                            class="fa fa-close"></i> </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ __('words.noteOne') }} :  {{ $pact->noteOne }} <br><br>
                                                        {{ __('words.noteTwo') }} :  {{ $pact->noteTwo }}

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>
