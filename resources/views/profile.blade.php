<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="uza - Model Agency HTML5 Template">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>FIVEL-Profile</title>

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
                            <h2 class="title">Profile</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href={{route('home')}}><i class="fa fa-home"></i> Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
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
            <h3>My Orders</h3>
            <br><br>
            @foreach($orders as $order)
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($order->cart->items as $item)
                            <li class="list-group-item">
                                <span class="badge">$ {{ $item['price'] }}</span>
                                {{ $item['item']['name'] }} | {{ $item['qty'] }} Units
                            </li>
                        @endforeach
                    </ul>
                </div>
                <br>   
                <div class="panel-footer"><strong>Total Price : $ {{ $order->cart->totalPrice }}</strong></div>
            </div>
            <br><br><br>
            @endforeach
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
