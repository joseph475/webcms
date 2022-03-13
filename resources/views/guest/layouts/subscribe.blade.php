<div class="subscribe-info text-center white-text mb8">
    <h6 class="font-bold">SUBSCRIBE</h6>
    <p>Get the latest product releases and updates to your inbox</p>
</div>


<div class="subs-email-section w-40 text-center mx-auto mb4">
    {{-- <form id="uploadForm" action="{{ route('subscribe.post') }}" method="POST" enctype="multipart/form-data">
        @csrf --}}
    <img id="subscribe-ultistik-logo" src="{{ url('/images/ultistik-logo.png') }}" alt="">
    <p class="mb3">By subscribing to the newsletter you are agreeing to your information being processed in line
        with
        the Data Protection regulations</p>
    <p class="font-bold text-center mb3">SUBSCRIBE TO OUR NEWSLETTER</p>
    <div class="input-with-btn mb" id="subscribe-email">
        <input class="input-field with-borders z-depth-2" placeholder="Enter Your Email" id="email" name="email" type="text"
            value="" />
            <button class="btn btn-flat input-btn btn-1" id="subscribe" class="waves-effect waves-green btn">
        <i class="material-icons">keyboard_arrow_right</i>
        </button>
        {{-- <a href="javascript:void(0)" class="btn btn-flat input-btn btn-1" id="email"><i
                    class="material-icons">keyboard_arrow_right</i></a> --}}
    </div>

    {{-- </form> --}}
</div>

<div class="follow-us-section mb7">
    <p class="font-bold text-center">FOLLOW US</p>
    <div class="social-media-icons">
        <a href="https://{{ $data['contacts']['facebook'] }}" target="_blank"><img class="mr1"
                src="{{ url('/images/twitter.png') }}" alt=""></a>
        <a href="https://{{ $data['contacts']['twitter'] }}" target="_blank"><img class="mr1"
                src="{{ url('/images/facebook.png') }}" alt=""></a>
        <a href="https://{{ $data['contacts']['instagram'] }}" target="_blank"><img class="mr1"
                src="{{ url('/images/instagram.png') }}" alt=""></a>
    </div>
</div>
