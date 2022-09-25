<div class="container-fluid">
    <div class="row">
        <div class="col-3  offset-2">
            <button wire:click='showForms' class="btn btn-primary">{{ __('words.editBanner') }}</button>
        </div>
    </div>

    <div class="row ">
        @if ($addBanner)
            <main wire:model='addBanner' class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
                <div class="card-header bg-light">{{ __('words.Banner') }} <nav class="nav navbar">
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

        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">

            <div class="row">

                <div class="col-12 mb-4">
                    <div class="card">
                        <h5 class="card-header">{{ __('words.banner') }}</h5>
                        <div class="card-body">
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




            <footer class="pt-5 d-flex justify-content-between">
                <span>Copyright © 2019-2020 <a href="https://themesberg.com">Themesberg</a></span>
                <ul class="nav m-0">
                    <li class="nav-item">
                        <a class="nav-link text-secondary" aria-current="page" href="#">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Terms and conditions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Contact</a>
                    </li>
                </ul>
            </footer>
        </main>

    </div>
</div>
