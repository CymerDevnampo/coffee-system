<header id="header" id="home">
    {{-- <div class="header-top">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
                    <ul>
                        <li>
                            Mon-Fri: 8am to 2pm
                        </li>
                        <li>
                            Sat-Sun: 11am to 4pm
                        </li>
                        <li>
                            <a href="tel:(012) 6985 236 7512">(012) 6985 236 7512</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="/"><img src="{{ asset('coffee-master/img/logo.png') }}" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#coffee">Coffee</a></li>
                    <li><a href="#review">Review</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li class="menu-has-children"><a href="">Pages</a>
                        <ul>
                            <li><a href="generic.html">Generic</a></li>
                            <li><a href="elements.html">Elements</a></li>
                        </ul>
                    </li>



                    <li>
                        <a class="menu-has-children" href="/cart">Cart
                        </a>
                        <ul>
                            <li><a href="/cart">View My Coffee Cart</a></li>
                            <li><a href="/track-order">Track my Order</a></li>
                        </ul>
                    </li>

                    @guest
                        <li>
                            <a class="menu-has-children" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a class="menu-has-children" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="menu-has-children"><a href="">{{ Auth::user()->name }}</a>
                            <ul>
                                <li><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest

                </ul>
            </nav>
        </div>
    </div>
</header>

@push('css')
    <style>
        .count-color {
            color: #b68834;
        }

        #mobile-nav ul .menu-has-children i {
            position: none !important;
        }
    </style>
@endpush
