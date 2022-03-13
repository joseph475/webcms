@extends('guest.layouts.app')

@section('meta_keywords', $data['meta_tags'][0]->keywords)
@section('meta_description', $data['meta_tags'][0]->description)
@section('page_title', $data['meta_tags'][0]->page)

@section('content')
    <div class="banner">
        <div class="img-overlay mb8">
            <img class="asyncImage" src="{{ url('images/Services/service_banner_320.jpg') }}"
            data-src="{{ url('images/Services/service_banner_960.jpg') }}">
        </div>
        <h4 class="center-vertically-horizontally white-text">Services</h4>
    </div>


    <div class="servicespage-container mb8">
        <div class="row products-row">
            @foreach ($data['services'] as $service)

                <div class="col m4 s12">
                    <div class="cards mb5">
                        <img class="asyncImage"
                            src="{{ url('images/Services/Resized250/' . $service->image) }}"
                            data-src="{{ url('images/Services/Resized600/' . $service->image) }}" alt="">
                            <h5>{{ $service->name }}</h5>
                            <p>{{ $service->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('pagejs')
    <script src="{{ asset('js/pages/guests/services/index.js') }}"></script>
@stop
