<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="uza - Model Agency HTML5 Template">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>FIVEL-Cart</title>

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
                            <h2 class="title">FIVEL Cart</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href={{route('home')}}><i class="fa fa-home"></i> Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">FIVEL Cart</li>
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

        <br><br><br><br>
        <div class="container h-100">
        @if(Session::has('cart'))
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <ul class="list-group">
                        
                        @foreach($products as $product)

                            <li class="list-group-item">
                                
                                <span class="badge">{{ $product['qty'] }}</span>
                                <strong>{{ $product['item']['name'] }}</strong>
                                <span class="label label-success">{{ $product['price'] }}</span>

                                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li href="#">Reduce by 1</li>
                                    <li href="#">Reduce All</li>
                                </ul>
                            </li>

                        @endforeach

                    </ul>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <strong><h3>Total: $ {{ $totalPrice }}</h3></strong>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <a href="{{ route('checkout') }}"><button type="button" class="btn btn-success">Checkout</button></a>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <h2>No FIVEL in Cart !!!</h2>
                </div>
            </div>
        @endif
        </div>


        <br><br><br><br>


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
