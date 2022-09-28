<div class="container-fluid">
    <div class="row">
        @if ($addBanner)
            <div class="col-6 text-center">
                <a href="{{ route('admin.dashboard.banner') }}" class="btn btn-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 12H6M12 5l-7 7 7 7" />
                    </svg>
                    {{ __('words.back') }}</a>
            </div>
        @endif

        @if ($bannerTable)
            <div class="col-3  offset-2">
                <button wire:click='showForms' class="btn btn-primary">{{ __('words.editBanner') }}</button>
            </div>
        @endif

    </div>


    <div class="row ">

        @if ($addBanner)

            <main wire:model='addBanner' class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
                <div class="card-header bg-light">{{ __('words.banner') }} <nav class="nav navbar">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a style="cursor: pointer" wire:click='showEnglishForm' class="nav-link">English</a>
                            </li>
                            <li class="nav-item">
                                <a style="cursor: pointer" wire:click='showArabicForm' class="nav-link">العربية</a>
                            </li>
                        </ul>
                </div>
                <form class="bg-light p-4" wire:submit.prevent='saveBanner'>

                    @if ($englishForm)
                        {{-- en form --}}
                        <div class="english-form">
                            <div class="form-group">
                                <label for="en_bannerTitle">{{ __('words.bannerTitle') }}</label>
                                <input class="form-control  @error('en_bannerTitle') border-danger border-2  @enderror"
                                    wire:model.lazy="en_bannerTitle" type="text" id="en_bannerTitle">
                                @error('en_bannerTitle')
                                    <div class="text-danger fs-6">

                                        <span>{{ $message }}</span>

                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="en_bannerBody">{{ __('words.bannerBody') }}</label>
                                <textarea wire:model.lazy="en_bannerBody"
                                    class=" form-control @error('en_bannerBody') border-danger border-2   @enderror" id="en_bannerBody"></textarea>
                                @error('en_bannerBody')
                                    <div class="text-danger fs-6">

                                        <span>{{ $message }}</span>

                                    </div>
                                @enderror
                            </div>
                        </div>
                    @endif

                    {{-- ar form --}}
                    @if ($arabicForm)
                        <div class="arabic-form">

                            <div class="form-group">
                                <label for="ar_bannerTitle">{{ __('words.bannerTitle') }}</label>
                                <input class="form-control  @error('ar_bannerTitle') border-danger border-2  @enderror"
                                    wire:model.lazy="ar_bannerTitle" type="text" id="ar_bannerTitle">
                                @error('ar_bannerTitle')
                                    <div class="text-danger fs-6">

                                        <span>{{ $message }}</span>

                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="ar_bannerBody">{{ __('words.bannerBody') }}</label>
                                <textarea wire:model.lazy="ar_bannerBody"
                                    class="form-control  @error('ar_bannerBody') border-danger border-2   @enderror" id="ar_bannerBody"></textarea>

                                @error('ar_bannerBody')
                                    <div class="text-danger fs-6">

                                        <span>{{ $message }}</span>

                                    </div>
                                @enderror
                            </div>
                        </div>
                    @endif

                    <div class="form-group my-2">
                        <input type="submit" class="btn btn-primary form-control" value="{{ __('words.save') }}">
                    </div>

                </form>
            </main>
        @endif

        <nav id="sidebar" class="col-md-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-md-5">
                <ul class="nav flex-column">



                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard.users') }}" class="nav-link" aria-current="page"
                            href="#users">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <span class="ml-2">{{ __('words.users') }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard.pacts') }}" class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-file">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                <polyline points="13 2 13 9 20 9"></polyline>
                            </svg>
                            <span class="ml-2">{{ __('words.pacts') }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard.banner') }}" class="nav-link active" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="2" />
                                <path d="M3 15h18" />
                            </svg>
                            <span class="ml-2">{{ __('words.banner') }}</span>
                        </a>
                </ul>
            </div>
        </nav>
        @if ($bannerTable)

            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card">
                            <h5 class="card-header">{{ __('words.banner') }}</h5>
                            <div class="card-body">
                                @if (session()->has('bannerUpdated'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Banner Successfully Updated</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                @if (session()->has('bannerCreated'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Banner Successfully Created</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <table class="table-responsive table">
                                    <thead>
                                        <th>{{ __('words.bannerTitle') }}</th>
                                        <th>{{ __('words.bannerBody') }}</th>
                                    </thead>
                                    <tbody>
                                        @if ($banner)
                                            <tr>
                                                <td>{{ $banner->translate(app()->getLocale())->bannerTitle }}</td>
                                                <td>{{ $banner->translate(app()->getLocale())->bannerBody }}</td>
                                            </tr>
                                        @endIf
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <!-- Another widget will go here -->
                    </div>
                </div>
            </main>
        @endif

    </div>
</div>
