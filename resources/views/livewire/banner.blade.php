<div class="container-fluid">

    <footer class="bg-dark footer row">
        @if ($banner)
            <div @if (app()->getLocale() == 'ar') style="text-align: right" @endif>
                <h1 class="header text-info">{{ $banner->translate(app()->getLocale())->bannerTitle }}</h1>
            </div>
            <div class="text-white" @if (app()->getLocale() == 'ar') style="text-align: right" @endif>
                <p class=" ">{{ $banner->translate(app()->getLocale())->bannerBody }}</p>
            </div>
        @endif
    </footer>
</div>
