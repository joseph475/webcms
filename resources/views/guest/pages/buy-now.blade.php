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
        <h4 class="center-vertically-horizontally white-text">Buy now from Resellers Worldwide</h4>
    </div>


    <div class="buynowpage-container mb8">
        <div class="row products-row">
            @foreach ($data['resellers'] as $reseller)

                <div class="col m4 s12">
                    <div class="cards mb5">
                        <a href="{{ $reseller->link }}" target="_blank">
                            <img class="asyncImage mb2"
                            src="{{ url('images/Resellers/Resized250/' . $reseller->image) }}"
                            data-src="{{ url('images/Resellers/Resized600/' . $reseller->image) }}" alt="">
                        </a>
                       
                            {{-- <h5>{{ $reseller->name }}</h5>
                            <p>{{ $reseller->description }}</p> --}}
                            {{-- <a href="{{ $reseller->link }}" target="_blank">{{ $reseller->link }}</a> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('pagejs')
    <script src="{{ asset('js/pages/guests/buynow/index.js') }}"></script>
@stop
