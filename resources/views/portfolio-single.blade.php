<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="uza - Model Agency HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Portfolio</title>

    <!-- Favicon -->
    <link rel="icon" href="theme/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    @include('includes.header')

   

    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Portfolio</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('portfolio')}}">Portfolio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Single Portfolio</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="theme/img/core-img/curve-5.png" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** Portfolio Single Area Start ***** -->
    <section class="uza-portfolio-single-area section-padding-80">
        <div class="container">
            <div class="row justify-content-between align-items-end">
                <div class="col-12 col-md-6">
                    <div class="portfolio-details-text">
                        <h2>Market Analysis</h2>
                        <h6>Analysis, Marketing</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="portfolio-meta">
                        <h6>Client: Clarence Ryan</h6>
                        <h6>Date: 07 DEC 2018</h6>
                        <h6>Location: United States</h6>
                        <h6>Author: Phillip Simon</h6>
                    </div>
                    <div class="portfolio-social-info d-flex align-items-center">
                        <p>Share:</p>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-feed" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="portfolio-thumbnail mt-80">
                        <img src="theme/img/bg-img/13.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="portfolio-pager mt-80 d-flex align-items-center justify-content-between">
                        <a href="{{route('portfolio-single')}}"><i class="arrow_left"></i> Previous Post</a>
                        <a href="{{route('home')}}">Back to home</a>
                        <a href="{{route('portfolio-single')}}">Next Post <i class="arrow_right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Portfolio Single Area End ***** -->

    <!-- ***** Newsletter Area Start ***** -->
    <section class="uza-newsletter-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Newsletter Content -->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="nl-content mb-80">
                        <h2>Subscribe to our Newsletter</h2>
                        <p>Subscribe our newsletter gor get notification about new updates, etc...</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="nl-form mb-80">
                        <form action="#" method="post">
                            <input type="email" name="nl-email" value="" placeholder="Your Email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Border Bottom -->
            <div class="border-line"></div>
        </div>
    </section>
    <!-- ***** Newsletter Area End ***** -->

    @include('includes.footer')

    <!-- ******* All JS Files ******* -->
    <!-- jQuery js -->
    <script src="theme/js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="theme/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="theme/js/bootstrap.min.js"></script>
    <!-- All js -->
    <script src="theme/js/uza.bundle.js"></script>
    <!-- Active js -->
    <script src="theme/js/default-assets/active.js"></script>

</body>

</html>