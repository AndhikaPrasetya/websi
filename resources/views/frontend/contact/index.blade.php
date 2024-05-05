@extends('layout.layout_frontend2')
@section('content')
<section class="hero-banner-sm ">
    <div class="container">
      <div class="hero-banner-sm-content">
        <h1>Contact Us</h1>
        <p>Kami dengan senang hati menerima masukan dari teman-teman</p>
      </div>
    </div>
  </section>
<section class="section">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-10">
				<div class="shadow rounded p-5 bg-white">
					<div class="row">
						<div class="col-12 mb-4">
							<h4>Leave Us A Message</h4>
						</div>
						<div class="col-lg-6">
							<div class="contact-form">
								<form action="#!">
									<div class="form-group mb-4 pb-2">
										<label for="exampleFormControlInput1" class="form-label">Full Name</label>
										<input type="text" class="form-control shadow-none" id="contact_name">
									</div>
									<div class="form-group mb-4 pb-2">
										<label for="exampleFormControlInput1" class="form-label">Email address</label>
										<input type="email" class="form-control shadow-none" id="contact_email">
									</div>
									<div class="form-group mb-4 pb-2">
										<label for="exampleFormControlTextarea1" class="form-label">Write Message</label>
										<textarea class="form-control shadow-none" id="exampleFormControlTextarea1" rows="3"></textarea>
									</div>
									<button class="btn btn-primary w-100" type="submit">Send Message</button>
								</form>
							</div>
						</div>
						<div class="col-lg-6 mt-5 mt-lg-0">
							<div class="contact-info">
								<div class="block mt-0">
									<h4 class="h5">Still Have Questions?</h4>
									<div class="content">Call Us We Will Be Happy To Help
										<br> <a href="tel:+XXX111222">+XXX111222</a> 
										<br>Monday - Friday
										<br>9AM TO 8PM Eastern Time</div>
								</div>
								<div class="block mt-4">
									<h4 class="h5">Canada Office</h4>
									<div class="content">Park Street.
										<br>455.
										<br>Salt lake</div>
								</div>
								<div class="block mt-4">
									<h4 class="h5">Demo Office</h4>
									<div class="content">22 Park Road.
										<br>23BX,
										<br>Demo</div>
								</div>
								<div class="block">
									<ul class="list-unstyled list-inline my-4 social-icons">
										<li class="list-inline-item me-3"><a title="Explorer Facebook Profile" class="text-black" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
										</li>
										<li class="list-inline-item me-3"><a title="Explorer Twitter Profile" class="text-black" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
										</li>
										<li class="list-inline-item me-3"><a title="Explorer Instagram Profile" class="text-black" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection