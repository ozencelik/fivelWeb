<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="uza - Model Agency HTML5 Template">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>Welcome</title>

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
                            <h2 class="title">SignIn</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href={{route('home')}}><i class="fa fa-home"></i> Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">SignIn</li>
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
            <form action="{{ route('signin') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
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
