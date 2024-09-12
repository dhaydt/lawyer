
@extends('layout.frontend.app')
@push('css')
    <style>
        .img-frame{
            height: 370px;
        }
        .img-frame img{
            height: 228px;
            width: 228px;
        }
        .h-600{
            height: 600px;
        }
    </style>
@endpush
@section('content')
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <!-- section begin -->
    <section id="subheader" class="jarallax text-white">
        <img src="{{ asset('storage/banner/'. $web_config['hero_banner']) }}" class="jarallax-img" alt="amaradvokat">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="spacer-single"></div>
                        <h1>{{ translate::translate($title) }}</h1>
                        {{-- <p>{{ translate::translate('Applicable Laws') }}</p> --}}
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

    <section aria-label="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="blog-read">
                        <div class="post-text">
                            {!! $content->keterangan !!}
                            @if($content->file)
                            <div class="d-flex w-100">
                                <embed src="{{ asset('storage/'.$content->file) }}" type="application/pdf" class="w-100 h-600">
                            </div>
                            @endif
                            <span class="post-date">{{ \Carbon\Carbon::parse($content->created_at)->format('d M Y') }}</span>
                        </div>
                    </div>
                    <div class="spacer-single"></div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- content close -->
@endsection
