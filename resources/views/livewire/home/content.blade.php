@push('css')
    <style>
        .post-text{
            height: 300px;
        }
    </style>
@endpush
<div>
    <section aria-label="section">
        <div class="container">
            <div class="row">
                @foreach ($content as $c)
                <div class="col-lg-4 col-md-6 mb30">
                    <div class="bloglist item shadow-sm">
                        <div class="post-content">
                            <div class="date-box">
                                <div class="m">{{ App\CPU\Helpers::getDate($c->created_at) }}</div>
                                <div class="d text-capitalize">{{ App\CPU\Helpers::monthChange($c->created_at) }}</div>
                            </div>
                            <div class="post-image">
                                <img alt="" src="{{ asset($c->image) }}">
                            </div>
                            <div class="post-text">
                                <span class="p-tagline text-capitalize">{{ $c->category }}</span>
                                <h4><a href="{{ route('single-content', $c->id) }}" class="text-capitalize">{{ $c->title }}<span></span></a>
                                </h4>
                                <p>
                                    {{ App\CPU\Helpers::limitText($c->content) }}
                                </p>
                                @php($tag = json_decode($c->hashtag))
                                @foreach ($tag as $t)
                                <span class="p-author text-lowercase">#{{ $t }}</span>
                                @endforeach
                            </div>
                        </div>
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
                {{-- <ul class="pagination">
                    <li><a href="#">Prev</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Next</a></li>
                </ul> --}}
            </div>
        </div>
    </section>
</div>
