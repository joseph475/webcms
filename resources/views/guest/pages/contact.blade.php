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
        <h4 class="center-vertically-horizontally white-text">Contact</h4>
    </div>

    <div class="contactspage-container mb8">
        @if ($errors->any())
            <div class="message red w-100">
                @foreach ($errors->all() as $error)
                    <h6 class="white-text">{{ $error }}</h6>
                @break
        @endforeach
    </div>
    @endif
    {{-- <form id="uploadForm" action="{{ route('send-email.post') }}" method="POST" enctype="multipart/form-data"> --}}
    {{-- <form id="uploadForm" action="{{ url('captcha-validation') }}" method="POST" enctype="multipart/form-data"> --}}
    {{-- @csrf --}}
    <div class="contact-form">
        <div class="row">
            <div class="col m6 s12">
                <h4>Lets Talk With Us</h4>
            </div>
            <div class="col m6 s12">
                <p class="text-smaller">Whether you have a question about features, compatibility or would like to
                    become a
                    distributor, drop us
                    a line.</p>
            </div>
        </div>
        <div class="row">
            <div class="col m6 s12">
                <div class="input-field">
                    <input placeholder="Enter your name" name="name" id="name" type="text" class="validate">
                    <label for="name">Name</label>
                </div>
            </div>
            <div class="col m6 s12">
                <div class="input-field">
                    <input placeholder="Enter your email" name="email" id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
        </div>
        <div class="row mb0">
            <div class="col s12">
                <div class="input-field">
                    <textarea class="p10" placeholder="Write your message" id="message" name="message" rows="10"></textarea>
                    <label for="message">Message</label>
                </div>
            </div>
        </div>
        <div class="row mb0">
            <div class="col s12">
                <div class="captcha">
                    <span>{!! captcha_img() !!}</span>
                    <button style="margin-top: -28px;" type="button" class="btn bg1-gradient" class="reload" id="reload">
                        &#x21bb;
                    </button>
                </div>
            </div>
        </div>
        <div class="row mb0">
            <div class="col m3 s12">
                <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <button id="sendEmail" type="submit" class="waves-effect mx0 my2 waves-light btn btn-1">Submit</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m4">
            <h5 class="text-center">Address</h5>
            <p class="text-smaller text-center grey-text">{{ $data['contacts']['address'] }}</p>
        </div>
        <div class="col s12 m4">
            <h5 class="text-center">Contact Information</h5>
            <p class="text-smaller text-center grey-text">{{ $data['contacts']['contact'] }}</p>
        </div>
        <div class="col s12 m4">
            <h5 class="text-center">Follow Us</h5>
            <div class="social-media-icons">
                <a href="https://{{ $data['contacts']['facebook'] }}" target="_blank"><img class="mr1"
                        src="{{ url('/images/twitter.png') }}" alt=""></a>
                <a href="https://{{ $data['contacts']['twitter'] }}" target="_blank"><img class="mr1"
                        src="{{ url('/images/facebook.png') }}" alt=""></a>
                <a href="https://{{ $data['contacts']['instagram'] }}" target="_blank"><img class="mr1"
                        src="{{ url('/images/instagram.png') }}" alt=""></a>
            </div>
        </div>
    </div>
    {{-- </form> --}}

    </div>
    <div class="mapouter">
        <div class="gmap_canvas"><iframe width="100%" height="300" id="gmap_canvas" {{-- src="https://maps.google.com/maps?q=FilamentOne,%20Inc.%2013600%20Copper%20Ave%20NE%20Ste%20C%20Albuquerque,%20NM%2087123%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" --}}
                {{-- https://maps.google.com/maps?q=FilamentOne%2C%20Inc.%2013600%20Copper%20Ave%20NE%20Ste%20C%20Albuquerque%2C%20NM%2087123USA&t=&z=13&ie=UTF8&iwloc=&output=embed --}}
                src="https://maps.google.com/maps?q={{ $data['map_address'] }}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    height: 300px;
                    width: 100%;
                }

            </style><a href="https://www.embedgooglemap.net"></a>
            <style>
                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 300px;
                    width: 100%;
                }

            </style>
        </div>
    </div>
@endsection

@section('pagejs')
    <script type="text/javascript">
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>
    <script src="{{ asset('js/pages/guests/contact/index.js') }}"></script>
    {{-- <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGfowmqOL_Z96ariy0GabCLOv3ZGsP7xE&callback=initMap">
    </script> --}}
@stop
