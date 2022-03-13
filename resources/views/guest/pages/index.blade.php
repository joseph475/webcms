@extends('guest.layouts.app')

@section('meta_keywords', $data['meta_tags'][0]->keywords)
@section('meta_description', $data['meta_tags'][0]->description)
@section('page_title', $data['meta_tags'][0]->page)

@section('content')
    @isset($data['sliders'])
        <div class="slider">
            <ul class="slides">
                @foreach ($data['sliders'] as $slider)
                    <li>
                        <div class="img-overlay">
                            <img class="asyncImage" src="{{ url('images/sliders/Resized320/' . $slider->image) }}"
                                data-src="{{ url('images/sliders/Resized960/' . $slider->image) }}">
                        </div>

                        <div class="caption center-align">
                            <h4>{{ $slider->title }}</h4>
                            <p>{{ $slider->description }}</p>
                            @isset($slider->button_text)
                            <a href="{{ $slider->button_link }}" class="waves-effect waves-light btn btn-1">{{ strtoupper($slider->button_text) }}</a>
                            @endisset
                            
                        </div>
                    </li>
                @endforeach
                <div class="row slider-center"><i id="next" class="material-icons">chevron_right</i> <i id="prev"
                        class="material-icons">chevron_left</i></div>
            </ul>
        </div>
    @endisset

    <h5 class="text-center font-bold mb6 border-bottom-center">Premium Powder Coated Build Plate</h5>

    <div class="products-container">
        @foreach ($data['products'] as $product)
            <div class="row products-row">
                <div class="col m6 s12">
                    <div class="card z-depth-0">
                        <img class="z-depth-1 right asyncImage" src="{{ url('images/Homepage/Resized250/' . $product->image) }}"
                            data-src="{{ url('images/Homepage/Resized600/' . $product->image) }}" alt="">
                    </div>
                </div>
                <div class="col m6 s12">
                    <div class="product-card">
                        <div class="product-info center-vertically-left">
                            <p class="product-name">{{ $product->name }}</p>
                            <p class="product-desc">{{ $product->description }}</p>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
        <a href="{{ url('/buynow') }}" class="waves-effect waves-light btn btn-1">BUY NOW</a>
    </div>

    <div class="section-subscribe">
        <h5 class="text-center font-bold mb6 border-bottom-center">Premium Powder Coated Build Plate</h5>
        <div class="iframe-container">
            <iframe class="responsive-iframe" src="https://www.youtube.com/embed/54ZKeYPmoVs" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>

@endsection

@section('pagejs')
    <script src="{{ asset('js/pages/guests/home/index.js') }}"></script>
@stop
