@extends('layout.frontend.app')
@section('content')

    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        @include('Home.components.banner')
        @include('Home.components.jarralax')
        @include('Home.components.services')
        @include('Home.components.experience')
        {{-- @include('Home.components.counter') --}}
        {{-- @include('Home.components.testimoni') --}}
        @include('Home.components.latest')
    </div>
    <!-- content close -->
{{-- @include('Home.components.floating') --}}
@endsection
