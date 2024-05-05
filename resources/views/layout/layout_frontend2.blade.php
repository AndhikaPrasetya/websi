<!DOCTYPE html>

<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>Livewire and filament</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="/frontend2/images/favicon.png" type="image/x-icon">
	<link rel="icon" href="/frontend2/images/favicon.png" type="image/x-icon">

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- # CSS Plugins -->
	<link rel="stylesheet" href="/frontend2/plugins/slick/slick.css">
	<link rel="stylesheet" href="/frontend2/plugins/font-awesome/fontawesome.min.css">
	<link rel="stylesheet" href="/frontend2/plugins/font-awesome/brands.css">
	<link rel="stylesheet" href="/frontend2/plugins/font-awesome/solid.css">
	<link rel="stylesheet" href="/frontend/vendors/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="/frontend/vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="/frontend/vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="/frontend/vendors/linericon/style.css">
	<link rel="stylesheet" href="/frontend/vendors/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="/frontend/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="/frontend/vendors/flat-icon/font/flaticon.css">
	<link rel="stylesheet" href="/frontend/vendors/nice-select/nice-select.css">
  
	<link rel="stylesheet" href="/frontend/css/style.css">

	<!-- # Main Style Sheet -->
	<link rel="stylesheet" href="/frontend2/css/style.css">
	<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>



</head>

<body>

<!-- navigation -->
<header class="navigation bg-tertiary" style="position: fixed; width: 100%; z-index: 1000;">
	<nav class="navbar navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<h1>Himsisfo</h1>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav m-auto mb-2 mb-lg-0">
					<li class="nav-item"> <a class="nav-link" href="{{url('/home')}}">Home</a></li>
					<li class="nav-item "> <a class="nav-link" href="{{url('/about')}}">About Us</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Informasi Mahasiswa
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <a class="dropdown-item" href="{{url('/seminar')}}">Artikel</a>
						  <a class="dropdown-item" href="{{url('/seminar')}}">Seminar</a>
						  <a class="dropdown-item" href="{{url('/magang')}}">Magang</a>
						  <a class="dropdown-item" href="{{url('/lomba')}}">kompetisi</a>
						  <a class="dropdown-item" href="{{url('/galeri')}}">Galeri</a>
						</div>
					  </li>
					  <li class="nav-item "> <a class="nav-link" href="{{url('/contact')}}">Contact Us</a></li>
					
				</ul>
				<a href="#!" class="custom-button">Login</a>				
			</div>
		</div>
	</nav>
</header>
<!-- /navigation -->




@yield('content');


<footer class="section-sm bg-tertiary">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Service</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a href="service-details.html">Digital Marketing</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Web Design</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Logo Design</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Graphic Design</a>
						</li>
						<li class="mb-2"><a href="service-details.html">SEO</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Quick Links</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a href="#!">About Us</a>
						</li>
						<li class="mb-2"><a href="#!">Contact Us</a>
						</li>
						<li class="mb-2"><a href="#!">Blog</a>
						</li>
						<li class="mb-2"><a href="#!">Team</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Other Links</h5>
					<ul class="list-unstyled">
						<li class="list-inline-item me-4"><a class="text-black" href="privacy-policy.html">Privacy Policy</a>
                        </li>
						<li class="list-inline-item me-4"><a class="text-black" href="terms.html">Terms &amp; Conditions</a>
                        </li>
					</ul>
				</div>
			</div>			
		</div>
		
	</div>
</footer>

<!-- # JS Plugins -->
<script src="/frontend2/plugins/jquery/jquery.min.js"></script>
<script src="/frontend2/plugins/bootstrap/bootstrap.min.js"></script>

<!-- Main Script -->
<script src="/frontend/vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="/frontend/vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="/frontend/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="/frontend/vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="/frontend/js/jquery.ajaxchimp.min.js"></script>
  <script src="/frontend/js/mail-script.js"></script>
  <script src="/frontend/js/skrollr.min.js"></script>
  <script src="/frontend/js/main.js"></script>
<script src="/frontend2/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

@yield('script')


</body>
</html>