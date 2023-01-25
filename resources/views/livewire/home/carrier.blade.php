<section>
    <div class="container">
        <div class="row">
            @if (count($carrier) == 0)

            @else
            @foreach ($carrier as $c)
            <div class="col-md-6 mb30" style="background-size: cover;">
                <div class="box-highlight s2" style="background-size: cover;">
                    <div class="heading text-center text-light" style="background-size: cover;">
                        <h3>{{ $c->position }}</h3>
                    </div>
                    <div class="content" style="background-size: cover;">
                        <div class="accordion" style="background-size: cover;">
                            <div class="accordion-section" style="background-size: cover;">
                                <div class="accordion-section-title active" data-tab="#accordion-b-1" style="background-size: cover;">
                                    Job Description
                                </div>
                                <div class="accordion-section-content" id="accordion-b-1" style="background-size: cover; display: block;">
                                    {!! $c->description !!}
                                </div>
                                <div class="accordion-section-title" data-tab="#accordion-b-2" style="background-size: cover;">
                                    Qualification
                                </div>
                                <div class="accordion-section-content" id="accordion-b-2" style="background-size: cover; display: none;">
                                    {!! $c->qualification !!}
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('apply', ['id' => $c->id]) }}" class="btn-custom btn-black">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
