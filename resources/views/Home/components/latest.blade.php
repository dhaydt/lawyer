@push('css')
    <style>
        .post-text{
            height: 300px;
        }
    </style>
@endpush
<section aria-label="section latest_page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h2>{{ translate::translate('Latest News') }}</h2>
                    <div class="small-border"></div>
                </div>
            </div>
        </div>
        <div class="row">
            @php($content = App\CPU\Helpers::getContent())
            @foreach ($content as $c)
            <div class="col-lg-4 col-md-6 mb30">
                <div class="bloglist item shadow-sm">
                    <div class="post-content">
                        <div class="date-box">
                            <div class="m">{{ App\CPU\Helpers::getDate($c->created_at) }}</div>
                            <div class="d text-capitalize">{{ App\CPU\Helpers::monthChange($c->created_at) }}</div>
                        </div>
                        <div class="post-image">
                            <img alt="amaradvokat" src="{{ asset($c->image) }}">
                        </div>
                        <div class="post-text">
                            <span class="p-tagline text-capitalize">{{ translate::translate($c->category) }}</span>
                            <h4><a href="{{ route('single-content', $c->id) }}" class="text-capitalize">{{ translate::translate($c->title)
                                    }}<span></span></a>
                            </h4>
                            <p>
                                @php($news= App\CPU\Helpers::limitText($c->content))
                                {{ translate::translate($news) }}
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
        </div>
    </div>
</section>
