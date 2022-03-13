<div class="navbar-fixed">
    <nav class="header-nav white">
        <div class="container">
            <div class="nav-wrapper">
                <div class="header-logo">
                    <a href="{{ url('/') }}" data-target="mobile" class="mx0 sidenav-trigger left show-on-small">
                        <i class="material-icons black-text">menu</i>
                    </a>
                    <a href="{{ url('/') }}" class="brand-logo black-text">
                        <img src="{{ url('/images/ultistik-logo.png') }}" alt="">
                    </a>
                </div>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a class="black-text" href="{{ url('/') }}">Home</a></li>
                    <li><a class="black-text" href="{{ url('/products') }}">Products</a></li>
                    <li><a class="black-text" href="{{ url('/services') }}">Services</a></li>
                    <li><a class="black-text" href="https://support.filamentone.com/collection/10-ultistik" target="_blank">Resources</a></li>
                    <li><a class="black-text" href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<ul class="sidenav guest-sidenav" id="mobile">
    <li><a class="black-text" href="{{ url('/') }}">Home</a></li>
    <li><a class="black-text" href="{{ url('/products') }}">Products</a></li>
    <li><a class="black-text" href="{{ url('/services') }}">Services</a></li>
    <li><a class="black-text" href="https://support.filamentone.com/collection/10-ultistik" target="_blank">Resources</a></li>
    <li><a class="black-text" href="{{ url('/contact') }}">Contact</a></li>
</ul>
