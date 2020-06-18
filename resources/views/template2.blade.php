<!DOCTYPE html>
	<html lang="en">
	
	<head>

		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
		<title>APLIKASI SATU</title>
		<meta name="descriptison" content="">
		<meta name="keywords" content="">

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

		<link href="{{url('/asets/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  		<link href="{{url('/asets/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  		<link href="{{url('/asets/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
	  	<link href="{{url('/asets/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
	 	<link href="{{url('/asets/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
	  	<link href="{{url('/asets/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
	  	<link href="{{url('/asets/assets/vendor/aos/aos.css')}}" rel="stylesheet">

	  	<link href="{{url('/asets/assets/css/style.css')}}" rel="stylesheet">
	</head>
	
	
	<body>


		<header id="header" class="fixed-top d-flex align-items-center">
			<div class="container">
				<div class="header-container d-flex align-items-center">
					<div class="logo mr-autp">
						<h1 class="text-align"><a href="{{url('/')}}"><strong>APP TEST</strong></a></h1>
					</div>

					<nav class="nav-menu d-none d-lg-block">
						<ul>
							<li class="active"><a href="/">Beranda</li>
							<li><a href="about">About</li>
						</ul>

						<li href="" class="navbar-right">
						<a href="{{url('login')}}">Login</a>
					</li>
					<li href="" class="navbar-right">
						<a href="{{url('register')}}">Register</a>
					</li>

					</nav>

					


				</div>
			</div>
		</header>


		<!-- 
		<nav class="navbar navbar-inverse" style="border-radius: 0px; ">
			<div class="container">
				<div class="navbar-header">
					<a href="{{url('/')}}" class="navbar-brand">
						<strong>APP-TEST</strong>
					</a>
				</div>
 -->

		<!-- <div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="{{url('/')}}">Beranda</a></li>
						<li><a href="{{url('about')}}">About</a></li>
						
					</ul>


								<li href="" class="navbar-right">
									<a href="{{url('register')}}">Register</a>
								</li>
								<li class="navbar-right">
								<a href="{{url('login')}}">Login</a>
								</li> -->


				
								
								
								@if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


								
					</li>
					
					</ul>
				</div>
			</div>
		</nav>

		<div class="container">
			<div class="panel panel-default" style="border-radius: 0px;">@section('contentWebsite')
				@show
			</div>
		</div>



<!-- Footer -->
	


	<footer class="text-center" style="border-radius: 100px;">
	@copyright 2020  

	</footer> 
</body>
</html>