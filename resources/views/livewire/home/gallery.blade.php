@push('css')
<style>
    .laravel-embed__responsive-wrapper {
        padding-bottom: 0 !important;
        display: flex;
        justify-content: center;
    }

</style>
@endpush
<section aria-label="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="background-size: cover;">
                <div class="text-center" style="background-size: cover;">
                    <h2>{{ translate::translate('Photos Documentation') }}</h2>
                    <div class="small-border" style="background-size: cover;"></div>
                </div>
            </div>
            @if (count($image) == 0)
            <div class="row justify-content-center">
                <div class="col-6 text-center">
                    <img height="170px" src="{{ asset('assets/images/coming_soon.png') }}" alt="">
                </div>
            </div>
            @else
            @foreach ($image as $i)
            <div class="col-md-4 mb30">
                <div class="de-image-hover">
                    <a href="{{ $i->image }}" class="image-popup">
                        <span class="dih-title-wrap">
                            <span class="dih-title">{{ translate::translate($i->title) }}</span>
                        </span>
                        <span class="dih-overlay"></span>
                        <img src="{{ $i->image }}" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <div class="row">
            <div class="col-lg-12" style="background-size: cover;">
                <div class="text-center" style="background-size: cover;">
                    <h2>{{ translate::translate('Video Documentation') }}</h2>
                    <div class="small-border" style="background-size: cover;"></div>
                </div>
            </div>
            @if (count($video) == 0)
            <div class="row justify-content-center">
                <div class="col-6 text-center">
                    <img height="170px" src="{{ asset('assets/images/coming_soon.png') }}" alt="">
                </div>
            </div>
            @else
            @foreach ($video as $v)
            <div class="col-md-4 mb30">
                <div class="de-image-hover">
                    @if ($v->youtube == null)
                        <span class="badge badge-danger">{{ translate::translate('Youtube url is empty') }}</span>
                    @else
                    <a href="{{ $v->youtube }}" class="image-popup">
                        {{-- <span class="dih-title-wrap">
                            <span class="dih-title">{{ $v->title }}</span>
                        </span>
                        <span class="dih-overlay"></span> --}}
                        {{-- <img src="{{ $i->image }}" class="img-fluid" alt=""> --}}
                        <x-embed url="{{ $v->youtube }}" aspect-ratio="16:9"/>
                    </a>
                    @endif
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
