@extends('guest.layouts.app')

@section('meta_keywords', $data['meta_tags'][0]->keywords)
@section('meta_description', $data['meta_tags'][0]->description)
@section('page_title', $data['meta_tags'][0]->page)

@section('content')
    <div class="banner">
        <div class="img-overlay mb8">
            {{-- <img src="{{ url('/images/Products/products_banner.jpg') }}" alt=""> --}}
            <img class="asyncImage" src="{{ url('images/Products/products_banner_320.jpg') }}"
                data-src="{{ url('images/Products/products_banner_960.jpg') }}">
        </div>
        <h4 class="center-vertically-horizontally white-text">Products</h4>
    </div>


    <div class="productspage-container mb8">
        <div class="row products-row">
            {{-- js generated --}}
        </div>
    </div>

@endsection

@section('pagejs')
    <script src="{{ asset('js/pages/guests/products/index.js') }}"></script>
@stop
