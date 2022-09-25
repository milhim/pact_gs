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
                                <th scope="col">{{ __('words.noteOne') }}</th>
                                <th scope="col">{{ __('words.noteTwo') }}</th>
                                <th scope="col">{{ __('words.status') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pacts as $pact)
                                <tr>
                                    <td>{{ $pact->serial_number }}</td>
                                    <td>{{ $pact->translate(app()->getLocale())->type }}</td>
                                    <td>{{ $pact->translate(app()->getLocale())->model }}</td>
                                    <td>{{ $pact->translate(app()->getLocale())->accessoar }}</td>
                                    <td>{{ $pact->translate(app()->getLocale())->noteOne }}</td>
                                    <td>{{ $pact->translate(app()->getLocale())->noteTwo }}</td>
                                    <td>{{ $pact->translate(app()->getLocale())->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>
