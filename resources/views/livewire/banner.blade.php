<div class="container mb-md-3 foter-container">
    <div class="row">

        <footer class="bg-dark col-12 p-3">
            @if ($banner)
                <div @if (app()->getLocale() == 'ar') style="text-align: right" @endif>
                    <h1 class="header text-white">{{ $banner->translate(app()->getLocale())->bannerTitle }}</h1>
                </div>
                <div class="text-white" @if (app()->getLocale() == 'ar') style="text-align: right" @endif>
                    <p >{{ $banner->translate(app()->getLocale())->bannerBody }}</p>
                </div>
            @endif
        </footer>
    </div>

</div>
