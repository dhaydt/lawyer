@push('css')
    <style>
        .post-text{
            height: 300px;
        }
        .feature-box.style-3 i.wm{
            z-index: 0;
            right: -170px !important;
        }
    </style>
@endpush
<div>
    <section aria-label="section">
        <div class="container">
            <div class="row">
                @foreach ($content as $c)
                <div class="col-lg-4 col-md-6 mb30" style="background-size: cover;">
                    <div class="feature-box f-boxed style-3 text-center" style="background-size: cover;">
                        <i class="id-color icofont-law-book"></i>
                        <div class="text" style="background-size: cover;">
                            <h4>{{ $c['tahun'] }}</h4>
                            {{ $c['tentang'] }}
                        </div>
                        {{-- <i class="wm icofont-law-book"></i> --}}
                        <div class="spacer-single" style="background-size: cover;"></div>
                        <a href="{{ route('undang_detail', ['id' => $c['id']]) }}" class="btn-custom btn-black w-100">{{ translate::translate('Read More') }}</a>
                    </div>
                </div>
                @endforeach
                <div class="spacer-single"></div>
                <div class="row px-9 pt-3 pb-5">
                    <div
                        class="col-sm-12 col-md-12 d-flex align-items-center justify-content-center justify-content-md-center">
                        {{ $content->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
