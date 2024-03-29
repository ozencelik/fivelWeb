    <!-- Preloader -->
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>

    <!-- ***** Top Search Area Start ***** -->
    <div class="top-search-area">
        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Search Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="uzaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="{{route('home')}}"><img src="theme/img/core-img/fivel.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="current-item"><a href="{{route('home')}}">Home</a></li>
                                @auth
                                 <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                                 <li><a href="{{route('portal')}}">Portal</a></li>
                                @endauth
                                 <li><a href="{{route('portal')}}">Portal</a></li>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="#">News</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('news')}}">- News</a></li>
                                        <li><a href="{{route('single-news')}}">- News Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>


                            @auth
                                <!-- Get A Quote -->
                                <div class="get-a-quote ml-4 mr-3">
                                    <a href="{{ route('shoppingCart') }}" class="btn uza-btn">FIVEL Card <span class=badge>{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></a>
                                </div>

                                 <!-- Login / Register -->
                                <div class="login-register-btn mx-3">
                                    <a href="{{route('user.profile')}}">{{ Auth::user()->name }}</a>
                                    <a href="{{ route('logout') }}">/ Logout</a>
                                </div>
                            @endauth

                            @guest
                                <!-- Get A Quote -->
                                <div class="get-a-quote ml-4 mr-3">
                                    <a href="{{ route('shoppingCart') }}" class="btn uza-btn">FIVEL Card</a>
                                </div>

                               <!-- Login / Register -->
                                <div class="login-register-btn mx-3">
                                    <a href="{{ route('signin') }}">Login</a>
                                    <a href="{{ route('signup') }}">/ Register</a>
                                </div>
                            @endguest
                            

                            <!-- Search Icon -->
                            <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->