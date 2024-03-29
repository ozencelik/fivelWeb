<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="uza - Model Agency HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>FIVEL - Portal</title>

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
                        <h2 class="title">Movement</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Movement</li>
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


        <div class="container-fluid">
        	<form action="{{ route('portal') }}" method="post">
        	@foreach($movements->chunk(4) as $movementChunk)

	            <div class="row uza-portfolio">

	            	@foreach($movementChunk as $movement)

	            		<!-- Single Portfolio Item -->
		                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item ux-ui-design">
		                    <div class="single-portfolio-slide">
		                        <img src="{{ $movement->imagePath }}" alt="">
		                        <!-- Overlay Effect -->
		                        <div class="overlay-effect">
		                            <h4>{{ $movement->title }}</h4>
		                            <p>{{ $movement->description }}</p>
		                            <!--<input type="checkbox" class="btn uza-btn btn-3" value="Movement[]"> -->
		                        </div>
		                        <!-- View More -->
	                            <div class="view-more-btn" name="Movement[]">
	                                <a href="{{ route('addToMovement', ['id' => $movement->id]) }}"><i class="icon_plus"></i></a>
	                            </div>

		                    </div>
		                </div>

	            	@endforeach
	       		</div>

	        	@endforeach
    		</form>
		</div>
        
        <div class="row">
            <div class="col-12 text-center mt-30">
            <a href="{{ route('sendMovement') }}" class="btn uza-btn btn-3">Set to FIVEL</a>
            </div>
        </div>
        
          <!--
         <div class="row">
            <div class="col-12 text-center mt-30">
                <a href="{{route('portfolio-single')}}" class="btn uza-btn btn-3">Set to FIVEL</a>
            </div>
        </div> -->
    </section>
    <!-- ****** Gallery Area End ****** -->



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