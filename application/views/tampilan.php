<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Hotel Mulya Senayan</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?php echo base_url('assets/dashboard/img/favicon.png') ?>" rel="icon">
	<link href="<?php echo base_url('assets/dashboard/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo base_url('assets/dashboard/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/dashboard/vendor/aos/aos.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/dashboard/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/dashboard/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/dashboard/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/dashboard/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/dashboard/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?php echo base_url('assets/dashboard/css/style.css') ?>" rel="stylesheet">

	<!-- =======================================================
  * Template Name: Flattern - v4.3.0
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Top Bar ======= -->
	<section id="topbar" class="d-flex align-items-center">
		<div class="container d-flex justify-content-center justify-content-md-between">
			<div class="contact-info d-flex align-items-center">
				<i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">hotelmulyasny@yahoo.com</a></i>
				<i class="bi bi-phone d-flex align-items-center ms-4"><span>02 5589 55488</span></i>
			</div>
			<div class="social-links d-none d-md-flex align-items-center">
				<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
				<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
				<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
				<a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
			</div>
		</div>
	</section>

	<!-- ======= Header ======= -->
	<header id="header" class="d-flex align-items-center">
		<div class="container d-flex justify-content-between">

			<div class="logo">
				<h1 class="text-light"><a href="index.html">Hotel Mulya Senayan</a></h1>
				<!-- Uncomment below if you prefer to use an image logo -->
				<!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
			</div>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="active" href="">Home</a></li>
					<li><a href=" ">About</a></li>
					<li><a href="">Booking Room</a></li>
					<li class="dropdown"><a href=""><span>Admin</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="<?php echo site_url('login'); ?>">Login</a></li>
					</li>
					<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero">
		<div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

			<div class="carousel-inner" role="listbox">

				<!-- Slide 1 -->
				<div class="carousel-item active" style="background-image: url(<?php echo base_url('assets'); ?>/dashboard/img/slide/hotel1.jpeg);">
					<div class="carousel-container">
						<div class="carousel-content animate__animated animate__fadeInUp">
							<h2>Welcome to <span>Hotel Mulya Senayan</span></h2>
							<p>
								Relax in a spacious hotel room with the signature Mulia bed, and lounge area. Every room is equipped with High Definition LED TVs for your entertainment. Guests will enjoy access to our exceptional state of the art fitness facilities and a plethora of the best restaurants in the city. Discover why Hotel Mulia Senayan is beyond a 5-star hotel, and the ultimate choice for a luxury accommodation in Jakarta.</p>
							<div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
						</div>
					</div>
				</div>

				<!-- Slide 2 -->
				<div class="carousel-item" style="background-image: url(<?php echo base_url('assets'); ?>/dashboard/img/slide/hotel7.jpeg);">
					<div class="carousel-container">
						<div class="carousel-content animate__animated animate__fadeInUp">
							<h2>Hotel Mulya Senayan</h2>
							<p>Designed for discerning travellers who expect the best, whether visiting Jakarta for business or leisure, our lavishly-appointed hotel rooms offer an accommodation that is a seamless blend of comfort and style with exceptional amenities. Enjoy inspiring views of the Senayan Golf Course or our tranquil swimming pool and the city.</p>
							<div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
						</div>
					</div>
				</div>

				<!-- Slide 3 -->
				<div class="carousel-item" style="background-image: url(<?php echo base_url('assets'); ?>/dashboard/img/slide/hotel5.jpeg);">
					<div class="carousel-container">
						<div class="carousel-content animate__animated animate__fadeInUp">
							<h2>JAKARTA’S FINEST HOTEL ACCOMMODATION</h2>
							<p>DISCOVER OUR LUXURIOUS JAKARTA HOTEL ACCOMMODATIONS</p>
							<div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
						</div>
					</div>
				</div>

			</div>

			<a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
			</a>

			<a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
			</a>

			<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

		</div>
	</section><!-- End Hero -->

	<main id="main">

		<!-- ======= Cta Section ======= -->
		<section id="cta" class="cta">
			<div class="container">

				<div class="row">
					<div class="col-lg-13 text-center text-lg-left">
						<h3><span>Facilities & Services </span></h3>
						<p> Imagine an exclusive sanctuary nestled right in the heart of Jakarta’s bustling financial district where style and magnificence await you at every corner, with warm, personalized service and impeccable hospitality. The 5-star, 994-room Hotel Mulia Senayan boasts unparalleled views of the Jakarta city skyline. The hotel exudes an atmosphere of understated luxury and comfort with each and every facility.

							As a Hotel Mulia Senayan guest, you will enjoy the privilege of working out in our newly remodeled Mulia Fitness Centre overlooking unrivaled 360-degree panoramic vista of Jakarta. Featuring one of the most expansive training space, exclusive for in-house guests. After your workout, enjoy soothing drinks and light refreshments at the poolside or pamper yourself with Mulia Spa, for the ultimate replenishing experience.

							In its quest to offer customers a wide variety of dining experiences, the hotel features five restaurants, a bar and one lounge, each with its own distinct cuisine and atmosphere. The Café offers an entirely unique take on the traditional 24-hour multi-cuisine restaurant. Other restaurants take inspiration from around the globe, such as il Mare (Italian cuisine), Table8 (Chinese cuisine), our Orient8 (French and Pan-Asian dishes), and Edogin (Japanese fare).</p>
					</div>
				</div>

				<section id="cta" class="cta">
					<div class="container">

						<div class="row">
							<div class="col-lg-13 text-center text-lg-left">
								<h3><span>Destination </span></h3>
								<p> Strategically set in the Senayan green-belt area, Hotel Mulia Senayan is unmistakably the perfect 5-star hotel for those visiting Jakarta for leisure or business. Accesible through two main streets of Jalan Asia Afrika and Jalan Tentara Pelajar, the luxury hotel is merely steps away from exclusive and stylish shopping malls Plaza Senayan and Senayan City. The hotel is undoubtedly the best place to stay in Jakarta for shopping. The city’s only 18-hole golf course, located just minutes away, awaits those seeking a relaxing afternoon of golf.

									Jakarta Convention Centre, home to many of the city’s festivals, concerts, exhibitions and conferences, is located across the street. At Hotel Mulia Senayan, you will find yourself in the ideal location to attend such events without having to travel through the legendary Jakarta traffic.

									The place to be in the city, SCBD & Senopati, and their diverse dining and activity offerings are a short drive away, letting you enjoy the best of Jakarta in style.</p>
							</div>

						</div>
					</div>
				</section><!-- End Cta Section -->



				<!-- ======= Portfolio Section ======= -->
				<section id="portfolio" class="portfolio">
					<div class="container">

						<div class="row" data-aos="fade-up">
							<div class="col-lg-12 d-flex justify-content-center">
								<ul id="portfolio-flters">
									<li data-filter="*" class="filter-active">All</li>
									<li data-filter=".filter-app">Deluxe</li>
									<li data-filter=".filter-card">Suite</li>
									<li data-filter=".filter-web">Superior</li>
								</ul>
							</div>
						</div>

						<div class="row portfolio-container" data-aos="fade-up">

							<div class="col-lg-4 col-md-6 portfolio-item filter-app">
								<img src="<?php echo base_url('assets'); ?>/dashboard/img/portfolio/portofolio1.jpeg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<h4>Mulia Splendor</h4>
									<p>
									<div class="row border-bottom">
										<div class="col-4 py-2">Beds</div>
										<div class="col-8 py-2 pl-0">King or Twin</div>
									</div>
									<div class="row border-bottom">
										<div class="col-4 py-2">Occupancy</div>
										<div class="col-8 py-2 pl-0">2 Adults & 1 Child</div>
									</div>
									<div class="row border-bottom">
										<div class="col-4 py-2">View</div>
										<div class="col-8 py-2 pl-0">Pool or City View</div>
									</div>
									</p>
									<a href="<?php echo base_url('assets'); ?>/dashboard/img/portfolio/portofolio1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Mulia Splendor"><i class="bx bx-plus"></i></a>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 portfolio-item filter-web">
								<img src="<?php echo base_url('assets'); ?>/dashboard/img/portfolio/superior1.jpeg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<h4>Classic 2 Twin Beds</h4>
									<p>
									<div class="row border-bottom">
										<div class="col-4 py-2">Beds</div>
										<div class="col-8 py-2 pl-0"> Twin</div>
									</div>
									<div class="row border-bottom">
										<div class="col-4 py-2">Occupancy</div>
										<div class="col-8 py-2 pl-0">2 Adults</div>
									</div>
									<div class="row border-bottom">
										<div class="col-4 py-2">View</div>
										<div class="col-8 py-2 pl-0">City View</div>
									</div>
									</p>
									<a href="<?php echo base_url('assets'); ?>/dashboard/img/portfolio/superior1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Classic 2 Twin Beds"><i class="bx bx-plus"></i></a>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 portfolio-item filter-app">
								<img src="<?php echo base_url('assets'); ?>/dashboard/img/portfolio/portofolio2.jpeg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<h4>Grandeur Deluxe</h4>
									<p>
									<div class="row border-bottom">
										<div class="col-4 py-2">Beds</div>
										<div class="col-8 py-2 pl-0">King or Twin</div>
									</div>
									<div class="row border-bottom">
										<div class="col-4 py-2">Occupancy</div>
										<div class="col-8 py-2 pl-0">2 Adults & 1 Child</div>
									</div>
									<div class="row border-bottom">
										<div class="col-4 py-2">View</div>
										<div class="col-8 py-2 pl-0">
											Golf Course or Pool or City View</div>
									</div>
									</p>
									<a href="<?php echo base_url('assets'); ?>/dashboard/img/portfolio/portofolio2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Grandeur Deluxe"><i class="bx bx-plus"></i></a>

								</div>
							</div>

							<div class="col-lg-4 col-md-6 portfolio-item filter-card">
								<img src="<?php echo base_url('assets'); ?>/dashboard/img/portfolio/suite1.jpeg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<h4>Junior Suite</h4>
									<p>
									<div class="row border-bottom">
										<div class="col-4 py-2">Beds</div>
										<div class="col-8 py-2 pl-0">King</div>
									</div>
									<div class="row border-bottom">
										<div class="col-4 py-2">Occupancy</div>
										<div class="col-8 py-2 pl-0">2 guest</div>
									</div>
									<div class="row border-bottom">
										<div class="col-4 py-2">View</div>
										<div class="col-8 py-2 pl-0">
											City View</div>
									</div>
									</p>
									<a href="<?php echo base_url('assets'); ?>/dashboard/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Junior Suite"><i class="bx bx-plus"></i></a>

								</div>
							</div>

							<div class="col-lg-4 col-md-6 portfolio-item filter-web">
								<img src="<?php echo base_url('assets'); ?>/dashboard/img/portfolio/superior2.jpeg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<h4>Suite 1 King Bed Ambassador Suite</h4>
									<p>
									<div class="row border-bottom">
										<div class="col-4 py-2">Beds</div>
										<div class="col-8 py-2 pl-0">King</div>
									</div>
									<div class="row border-bottom">
										<div class="col-4 py-2">Occupancy</div>
										<div class="col-8 py-2 pl-0">2 guest</div>
									</div>
									<div class="row border-bottom">
										<div class="col-4 py-2">View</div>
										<div class="col-8 py-2 pl-0">
											City View</div>
									</div>
									</p>
									<a href="<?php echo base_url('assets'); ?>/dashboard/img/portfolio/superior2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Suite 1 King Bed Ambassador Suite"><i class="bx bx-plus"></i></a>

								</div>
							</div>

							<div class="col-lg-4 col-md-6 portfolio-item filter-app">
								<img src="<?php echo base_url('assets'); ?>/dashboard/img/portfolio/portofolio3.jpeg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<h4>Mulia Grandeur</h4>
									<p>
									<div class="row border-bottom">
										<div class="col-4 py-2">Beds</div>
										<div class="col-8 py-2 pl-0">King or Twin</div>
									</div>
									<div class="row border-bottom">
										<div class="col-4 py-2">Occupancy</div>
										<div class="col-8 py-2 pl-0">2 Adults & 1 Child</div>
									</div>
									<div class="row border-bottom">
										<div class="col-4 py-2">View</div>
										<div class="col-8 py-2 pl-0">
											Golf Course or Pool or City View</div>
									</div>
									</p>
									<a href="<?php echo base_url('assets'); ?>/dashboard/img/portfolio/portofolio3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Mulia Grandeur"><i class="bx bx-plus"></i></a>

								</div>
							</div>

							<div class="col-lg-4 col-md-6 portfolio-item filter-card">
								<img src="<?php echo base_url('assets'); ?>/dashboard/img/portfolio/suite3.jpeg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<h4>Mulia Signature</h4>
									<p>
									<div class="row border-bottom">
										<div class="col-4 py-2">Beds</div>
										<div class="col-8 py-2 pl-0">King or Twin</div>
									</div>
									<div class="row border-bottom">
										<div class="col-4 py-2">Occupancy</div>
										<div class="col-8 py-2 pl-0">2 Adults & 1 Child</div>
									</div>
									<div class="row border-bottom">
										<div class="col-4 py-2">View</div>
										<div class="col-8 py-2 pl-0">
											Golf Course or Pool or City View</div>
									</div>
									</p>
									<a href="<?php echo base_url('assets'); ?>/dashboard/img/portfolio/suite3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Mulia Signature"><i class="bx bx-plus"></i></a>

								</div>
							</div>

							<div class="col-lg-4 col-md-6 portfolio-item filter-card">
								<img src="<?php echo base_url('assets'); ?>/dashboard/img/portfolio/suite2.jpeg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<h4>Executive</h4>
									<p>
									<div class="row border-bottom">
										<div class="col-4 py-2">Beds</div>
										<div class="col-8 py-2 pl-0">King or Twin</div>
									</div>
									<div class="row border-bottom">
										<div class="col-4 py-2">Occupancy</div>
										<div class="col-8 py-2 pl-0">2 Adults & 1 Child</div>
									</div>
									<div class="row border-bottom">
										<div class="col-4 py-2">View</div>
										<div class="col-8 py-2 pl-0">
											Golf Course or Pool or City View</div>
									</div>
									</p>
									<a href="<?php echo base_url('assets'); ?>/dashboard/img/portfolio/suite2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Executive"><i class="bx bx-plus"></i></a>

								</div>
							</div>

							<div class="col-lg-4 col-md-6 portfolio-item filter-web">
								<img src="<?php echo base_url('assets'); ?>/dashboard/img/portfolio/superior3.jpeg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<h4>Club 1 King Bed Intercontinental Club</h4>
									<p>
									<div class="row border-bottom">
										<div class="col-4 py-2">Beds</div>
										<div class="col-8 py-2 pl-0">King </div>
									</div>
									<div class="row border-bottom">
										<div class="col-4 py-2">Occupancy</div>
										<div class="col-8 py-2 pl-0">2 Adults & 1 Child</div>
									</div>
									<div class="row border-bottom">
										<div class="col-4 py-2">View</div>
										<div class="col-8 py-2 pl-0">
											Golf Course or Pool or City View</div>
									</div>
									</p>
									<a href="<?php echo base_url('assets'); ?>/dashboard/img/portfolio/superior3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Club 1 King Bed Intercontinental Club"><i class="bx bx-plus"></i></a>

								</div>
							</div>

						</div>

					</div>
				</section><!-- End Portfolio Section -->



	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer">

		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6 footer-contact">
						<h3>Hotel Mulya Senayan</h3>
						<p>
							Jl. Asia Afrika No.6, RW.3, Gelora<br>
							Kecamatan Tanah Abang, Kota Jakarta Pusat<br>
							Daerah Khusus Ibukota Jakarta<br><br>
							<strong>Phone:</strong> 02 5589 55488<br>
							<strong>Email:</strong> hotelmulyasny@yahoo.com<br>
						</p>
					</div>

					<div class="col-lg-2 col-md-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
						</ul>
					</div>



					<div class="col-lg-4 col-md-6 footer-newsletter">
						<h4>Join Our Newsletter</h4>

						<form action="" method="post">
							<input type="email" name="email"><input type="submit" value="Subscribe">
						</form>
					</div>

				</div>
			</div>
		</div>

		<div class="container d-md-flex py-4">

			<div class="me-md-auto text-center text-md-start">
				<div class="copyright">
					&copy; Copyright <strong><span>Hotel Mulya Senayan</span></strong>. All Rights Reserved
				</div>
				<div class="credits">
					<!-- All the links in the footer should remain intact. -->
					<!-- You can delete the links only if you purchased the pro version. -->
					<!-- Licensing information: https://bootstrapmade.com/license/ -->
					<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/ -->
					Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
				</div>
			</div>
			<div class="social-links text-center text-md-right pt-3 pt-md-0">
				<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
				<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
				<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
				<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
				<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
			</div>
		</div>
	</footer><!-- End Footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?php echo base_url('assets/dashboard/vendor/aos/aos.js') ?>"></script>
	<script src="<?php echo base_url('assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/dashboard/vendor/glightbox/js/glightbox.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/dashboard/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/dashboard/vendor/php-email-form/validate.js') ?>"></script>
	<script src="<?php echo base_url('assets/dashboard/vendor/swiper/swiper-bundle.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/dashboard/vendor/waypoints/noframework.waypoints.js') ?>"></script>

	<!-- Template Main JS File -->
	<script src="<?php echo base_url('assets/dashboard/js/main.js') ?>"></script>

</body>

</html>
