<!DOCTYPE html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Teka</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script src="{{ asset('js/script.js') }}" defer></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
    {{-- favicon --}}
    <link rel="icon" href="{{ URL::asset('/img/favicon.png') }}" type="image/x-icon"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/style2.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/media-queries.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    
</head>
<body>
<div id="current-page">
	<div id="welcome">
		<div id = "toolbar" > 
		<nav role = "navigation">
			<div id ="menuToggle">
				<input type="checkbox"/>
				<span id = "ham"></span>
				<span id = "ham"></span>
				<span id = "ham"></span>

				<ul id="menu">
			    <a href="#current-page"><li>Home<hr></li></a>
			    <a href="#feature-section"><li>About<hr></li></a>
			    <a href="#reviews-section"><li>Info<hr></li></a>
			    <a href="#contact-section"><li>Contact<hr></li></a>
			    <a href="{{ route('login') }}"><li>Log in<hr></li></a>
			    <a href="{{ route('register') }}"><li>Sign up</li></a>
			    </ul>
			</div>
			<div class = "brand navbar-brand">
			<a id="title href="#current-page">
				<img src="{{ asset('img/logo.png') }}">	
				<span id="title">TEKA</span> 	
			</a>
		</div>
		</nav>
		
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul style="text-align:right; margin:10px;" class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login for perks') }}</a>
                            </li> --}}
                            @if (Route::has('register'))
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register for perks') }}</a>
                                </li> --}}
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('logout') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre                                          onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ Auth::user()->name }}
									
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
													
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
		</div>
	<!--	<div id = "navigation-btn" class = "hover no-select"><img src="https://img.icons8.com/carbon-copy/32/000000/menu.png"/>MENU</div> -->
		{{-- <link rel="icon" href="{{ URL::asset('/img/favicon.png') }}" type="image/x-icon"/> --}}
	</div>
	<div id="backpadding"></div>
	<div style="background-image: url('{{ asset('img/macbook homescreen.png')}}');" class = "firstscreen">
		<div>
			<h1>Power. Moves. <hr></h1>
			<h2>Whole new level of performance and portability.</h2>
			<a href="#purchasing-section"><button class = "button" id= "buybtn">Buy now</button></a>
		</div>
		
	</div>



	<!-- Features Section -->
	<div class="feature-page" id="feature-section">
		<div class="title-2">
			<h1><strong>Feat</strong>ures</h1>
		</div>
		<div class="containerf">
			<!-- First Feature -->
			<div class="boxf">
				<div class="contentf">
					<img src="{{ asset('img/icons/cpu.png') }}">
					<h3>Powerful</h3>
					<p>It's equipped with the newest generation of Intel processor that
					will make it rapid in the use with high performance.
					</p>
					<a href="#">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					Learn More
					</a>
				</div>
			</div>

			<!-- Second Feature -->
			<div class="boxf">
				<div class="contentf">
					<img src="{{ asset('img/icons/ram.png')}}">
					<h3>Flexibility</h3>
					<p>It has a well-built upgradable RAM that will make your experience better.</p>
					<a href="#">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					Learn More
					</a>
				</div>
			</div>

			<!-- Third Feature -->
			<div class="boxf">
				<div class="contentf">
                    <img src="{{ asset('img/icons/image.png')}}">
					<h3>Lucidity</h3>
					<p>You will experience a high resolution display with a wonderful
					refresh rate up to 120 Hz.
					</p>
					<a href="#">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					Learn More
					</a>
				</div>
			</div>

			<!-- Fourth Feature -->
			<div class="boxf">
				<div class="contentf">
                    <img src="{{ asset('img/icons/feather.png')}}">
					<h3>Lightweight</h3>
					<p>You will feel the easiness of portability as it's made of materials
					that makes it feel like a feather.
					</p>
					<a href="#">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					Learn More
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="purchasing-page" id = "purchasing-section">
		<div class="title-3">
			<h1><strong>Purch</strong>asing</h1>
		</div>
	<div class="container-2">
		<div class="box-2">

			<div class="content-2">
				<h3>Processor</h3>
				<a href="#">Core i3</a>
				<a href="#">Core i5</a>
				<a href="#">Core i7</a>

				<h3>RAM</h3>
				<a href="#">8 GB</a>
				<a href="#">16 GB</a>
				<a href="#">32 GB</a>

				<h3>Internal Storage</h3>
				<a href="#">1 TB</a>
				<a href="#">2 TB</a>
				
				<br>
				<a id="purch-but" href="#">Buy</a>			
			</div>

		</div>

		<div class="product-card">
			<div class="product-pic">
				<img src="{{ asset('img/images/silver1.jpg')}}" id="myImg"/>
					<input class="but-change" type="button" onclick="changeImg()" value="Color" />				
			</div>
		</div>
	</div>
		
</div>

	<div style="background-color: #313131;" id = "reviews-section">
	<div class="container pt-3 pb-5 " style="background-color:  #313131;">
		<strong><p class="review-1">See what people think about our product</p></strong> 
		<!-- <h1>Reviews</h1> -->
		<div class="embed-responsive embed-responsive-16by9" id= "video">
			<iframe allowfullscreen="allowfullscreen"
			mozallowfullscreen="mozallowfullscreen" 
			msallowfullscreen="msallowfullscreen" 
			oallowfullscreen="oallowfullscreen" 
			webkitallowfullscreen="webkitallowfullscreen" class="embed-responsive-item" src="https://www.youtube.com/embed/z-pXBMjt3Wc"></iframe>
		</div>
	</div>
	</div>
	
	<!-- Footer -->
	<footer >
		<div  style="background-color: #313131;" class="footer-top" id="contact-section">
			<div style="background-color: #525252; padding-top: 20px;" class="container">
				<div class="row">
					
					<div class="col-md-4 col-lg-3 footer-about ">
						<h3>Teka</h3>
						<!--<span><img class="logo-footer" src="assets/ico/favicon.png" alt="logo-footer" data-at2x="assets/ico/favicon.png"></span>-->
						<p>We are a young company always looking for new and creative ideas to help you with our products in your everyday work.</p>
						<a style="color: white;" class="btn btn-primary"  role="button">Our Team</a>
					</div>
					<div class="col-md-4 col-lg-4 offset-lg-1 footer-contact">
						<h3  >Contact</h3>
						<p><i class="fas fa-map-marker-alt"></i> 7174 Plumb Branch St.
							Fort Lauderdale, FL 33308</p>
						<p><i class="fas fa-phone"></i> Phone: (0123) 456 78 91 348</p>
						<p><i class="fas fa-envelope"></i> Email: info@teka.com</p>
						<p><i class="fab fa-skype"></i> Skype: Teka</p>
						<p><i class="fab fa-discord"></i> Discord: Teka#0001</p>
					</div>
					<div class="col-md-4 col-lg-4 footer-links">
						<div class="row">
							<div class="col">
								<h3>Links</h3>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 p-3">
								<ul style = "list-style-type: none;" class="m-0 p-0">
									<li> <a href="#">Privacy Policy</a></li>
									<li> <a href="#">Feedback</a></li>
									<li> <a href="#">Advertise</a></li>
									<li> <a href="#">Branches</a></li>
									<li> <a href="#">Careers</a></li>
									<li> <a href="#">About Us</a></li>
									<li> <a href="#">Help</a></li>
								  </ul>
							</div>
						</div>
					</div>				
				</div>
			</div>
			<div  style="text-align:center;bottom: 0;"class="row mt-4">
				<div class="col copyright">
				  <p class=""><small class="text-white-50">© 2020. All Rights Reserved.</small></p>
				</div>
			  </div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row ">
					   <div style="margin: auto;" class="footer-social">
						<a id="fb" href="#"><i class="fab fa-facebook"></i></a> 
						<a id="tw" href="#"><i class="fab fa-twitter"></i></a> 
						<a id="g" href="#"><i class="fab fa-google-plus-g"></i></a> 
						<a id="ig" href="#"><i class="fab fa-instagram"></i></a> 
						<a id="pin" href="#"><i class="fab fa-pinterest"></i></a>
						<a id="d" href="#"><i class="fab fa-discord mr-2"></i></a>

					</div>
				   </div>
			</div>
		</div>
	</footer>
</section>
<script type="text/javascript">
	function changeImg() {
		var image = document.getElementById('myImg');
		if (image.src.match("{{ asset('img/images/silver1.jpg')}}")) {
			image.src = "{{ asset('img/images/spacegrey.jpg')}}";
			}
		else {
				image.src = "{{ asset('img/images/silver1.jpg')}}";
				}
			}
</script>

{{-- <script>
	$(".product-colors span").click(function(){
	  $(".product-colors span").removeClass("active");
	  $(this).addClass("active");
	  $(".product-pic").css("background-image",$(this).attr("data-pic"));
	});
  </script> --}}
</body>
</html>