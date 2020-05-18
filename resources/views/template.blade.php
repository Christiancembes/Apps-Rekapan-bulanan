<!DOCTYPE html>
	<html>
	<head>
		<title>APLIKASI SATU</title>
		<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
	</head>
	
	
	<body>
		<nav class="navbar navbar-inverse" style="border-radius: 0px; ">
			<div class="container">
				<div class="navbar-header">
					<a href="{{url('/')}}" class="navbar-brand">
						<strong>APP-TEST</strong>
					</a>
				</div>

<style>
.dropdown-content {
	display: none;
	position: right;
	min-width: 160px;
	/*z-index: 1;*/
}

.dropdown-content a{
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: grey;
   color: white;
   text-align: center;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover
 </style>

				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="{{url('/')}}">Beranda</a></li>
						<li><a href="{{url('about')}}">About</a></li>
						
					</ul>


								<li href="" class="navbar-right">
									<a href="{{url('register')}}">Register</a>
								</li>
								<li class="navbar-right">
								<a href="{{url('login')}}">Login</a>
								</li>
								
								
								<div class="dropdown navbar-right">
									<a class="dropbtn">Master Data</a>
									<div class="dropdown-content">
										<a href="{{url('inputpemasukkan')}}">Input Pemasukkan</a>
										<a href="{{url('inputpengeluaran')}}">Input Pengeluaran</a>
										<a href="{{url('laporan')}}">Laporan</a>
									</div>
								</div>



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


								<!-- <ul class="nav navbar-nav navbar-right">
									<li class="dropdown">
									<a href="#" class="nav-link dropdown-toggel" id="navbarDropdown" aria-haspopup="true" aria-expanded="false" data-toggel="dropdown">Data Master<span class="caret"></span>
									</a>
										
								<ul class="dropdown">
									<li><a href="{{url('inputpemasukkan')}}">Input Pemasukkan</a></li>
									<li><a href="{{url('inputpengeluaran')}}">Input Pengeluaran</a></li>
									<li><a href="{{url('laporan')}}">Laporan</a></li>
								</ul> -->
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
	<script src="{{url('assets/js/jquery-1.12.4.min')}}"></script>
	<script src="{{url('assets/js/bootstrap.min.js')}}"></script>


	<footer class="text-center" style="border-radius: 100px;">
	@copyright 2020  

	</footer> 
</body>
</html>