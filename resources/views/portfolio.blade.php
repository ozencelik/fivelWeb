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
                                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
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

    <!-- ****** Gallery Area Start ****** -->
    <section class="uza-portfolio-area section-padding-80">

        <!-- Portfolio Menu -->
        <div class="portfolio-menu text-center mb-80">
            <button class="btn active" data-filter="*">All Portfolio</button>
            <button class="btn" data-filter=".ux-ui-design">UX/UI Design</button>
            <button class="btn" data-filter=".market-analytics">Market Analytics</button>
            <button class="btn" data-filter=".marketing-social">Marketing Social</button>
        </div>

        <div class="container-fluid">

            @foreach($products->chunk(4) as $productChunk)
                <div class="row uza-portfolio">
                    @foreach($productChunk as $product)
                        <!-- Single Portfolio Item -->
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item ux-ui-design">
                            <div class="single-portfolio-slide">
                                <img src="{{ $product->imagePath }}" alt="">
                                <!-- Overlay Effect -->
                                <div class="overlay-effect">
                                    <h4>{{ $product->name }}</h4>
                                    <p>{{ $product->description }}</p>
                                    <br><br><br><br>
                                    <h5>$ {{ $product->price }}</h5>
                                </div>
                                <!-- View More -->
                                <div class="view-more-btn">
                                    <a href="{{route('portfolio-single')}}"><i class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            @endforeach

            <div class="row">
                <div class="col-12 text-center mt-30">
                    <a href="{{route('portfolio-single')}}" class="btn uza-btn btn-3">Load More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Gallery Area End ****** -->

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