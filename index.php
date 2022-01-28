<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title><?php the_title() ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>

	<style>
		@import url('https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i,900&display=swap');
		@import url('https://fonts.googleapis.com/css?family=Noto+Sans:400,700&display=swap');
		
		.single header {
			background: url('<?php echo get_template_directory_uri(); ?>/img/dogs.png');
			padding: 1.6% 4%;
		}

		.brands header {
			background: url('<?php echo get_template_directory_uri(); ?>/img/brands-header-bg.png');
		}

		.advertising header {
			background: url('<?php echo get_template_directory_uri(); ?>/img/amvertising-bg-header.png');
		}

		.contacts-form .select-wrapper:before {
			background: url(<?php echo get_template_directory_uri(); ?>/img/dropdown-icon.png);
		}
		
		@media screen and (max-width: 768px) {
			.single header {
				background: url('<?php echo get_template_directory_uri(); ?>/img/item-bg-header-mobile.png');
			}
		}
		
		
		
	</style>
	
	<?php wp_head() ?>
</head>

<body>
	<div class="wrapper">
		<div class="overlay no-active">
			<div class="overlay-content">
				<div class="top-nav_menu">
					<ul class="nav-links">
						<li><a href="https://www.square7media.co.uk/">Home</a></li>
						<li><a href="https://www.square7media.co.uk/about-us/">About Us</a></li>
						<li><a href="https://www.square7media.co.uk/advertising-services/">Advertising Sales</a></li>
						<li><a href="https://www.square7media.co.uk/publishing/">Publishing Services</a></li>
						<li><a href="https://www.square7media.co.uk/clients/">Clients</a></li>
						<li><a href="https://www.square7media.co.uk/contact/">Contact</a></li>
					</ul>
					<hr>
					<ul class="nav-contacts">
						<li><a href="tel: 020 3283 4055">020 3283 4055</a></li>
						<li><a href="mailto: enquiries@square7media.co.uk">enquiries@square7media.co.uk</a></li>
					</ul>
				</div>
			</div>
		</div>
		<header>
			<div class="navbar">
				<a href="https://www.square7media.co.uk/" class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
				</a>
				
				<ul class="nav-links">
					<li><a href="https://www.square7media.co.uk/" class="active">Home</a></li>
					<li><a href="https://www.square7media.co.uk/about-us/">About Us</a></li>
					<li><a href="https://www.square7media.co.uk/advertising-services/">Advertising Sales</a></li>
					<li><a href="https://www.square7media.co.uk/publishing/">Publishing Services</a></li>
					<li><a href="https://www.square7media.co.uk/clients/">Clients</a></li>
					<li><a href="https://www.square7media.co.uk/contact/">Contact</a></li>
				</ul>
				<div class="nav-contacts">
					<div class="phone">	
						<a href="tel: 020 3283 4055" class="phone-link">
							<img src="<?php echo get_template_directory_uri(); ?>/img/phone.png" alt="phone">
							020 3283 4055
						</a>		
					</div>
					<div class="mail">
						<a href="mailto: enquiries@square7media.co.uk">
							<img src="<?php echo get_template_directory_uri(); ?>/img/mail.png" alt="mail">
							enquiries@square7media.co.uk
						</a>
					</div>
				</div>
				<div class="nav-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/img/nav-icon.png" alt="navbar icon">
				</div>
			</div>

			<div class="header-content">
				<h1>RELAX.</h1>
				<p>We’ll Take Care of Your Publishing</br> and Advertising in Style</p>
				<!--a class="custom-btn" data-toggle="modal" data-target="#exampleModal">BEGIN HERE</a-->
			</div>
		</header>
		<div class="content">

			<div class="modal fade" id="exampleModal" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <a class="close" data-dismiss="modal"></a>
			        <div class="custom-modal-content modal-body">
						<div class="contacts-form">
							<form action="" id="my-form">
								<div class="form-container">
									<?php echo do_shortcode('[ninja_form id=1]'); ?>
								</div>
							</form>				
						</div>				
			      </div>
			    </div>
			  </div>
			</div>

			<div class="our-clients section">
				<h2><a href="https://www.square7media.co.uk/clients/" class="title">OUR CLIENTS</a></h2>
				<div class="slider-container pc-container">
					<div class="btn-left">
						<img src="<?php echo get_template_directory_uri(); ?>/img/btn-left.png" alt="button">
					</div>
					<div class="slider slider-pc">
						<div class="item2">
							<div class="item">
								<div class="img-container">
									<img src="<?php echo get_template_directory_uri(); ?>/img/slide1.png" alt="slide">
								</div>
							</div>
							<div class="item">
								<div class="img-container">
									<img src="<?php echo get_template_directory_uri(); ?>/img/rcn.png" alt="slide">
								</div>
							</div>
							<div class="item">
								<div class="img-container">
									<img src="<?php echo get_template_directory_uri(); ?>/img/slide3.png" alt="slide">
								</div>
							</div>
							<div class="item">
								<div class="img-container">
									<img src="<?php echo get_template_directory_uri(); ?>/img/slide4.png" alt="slide">
								</div>
							</div>
							<div class="item">
								<div class="img-container">
									<img src="<?php echo get_template_directory_uri(); ?>/img/slide5.png" alt="slide">
								</div>
							</div>
						</div>
						<div class="item2">
							<div class="item">
								<div class="img-container">
									<img src="<?php echo get_template_directory_uri(); ?>/img/cspa.png" alt="slide">
								</div>
							</div>
							<div class="item">
								<div class="img-container">
									<img src="<?php echo get_template_directory_uri(); ?>/img/daat.png" alt="slide">
								</div>
							</div>
							<div class="item">
								<div class="img-container">
									<img src="<?php echo get_template_directory_uri(); ?>/img/fire.png" alt="slide">
								</div>
							</div>
							<div class="item">
								<div class="img-container">
									<img src="<?php echo get_template_directory_uri(); ?>/img/Stroke.png" alt="slide">
								</div>
							</div>
							<div class="item">
								<div class="img-container">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ugle.png" alt="slide">
								</div>
							</div>
						</div>
						<div class="item2">
							<div class="item">
								<div class="img-container">
									<img src="<?php echo get_template_directory_uri(); ?>/img/narpo.png" alt="slide">
								</div>
							</div>
							<div class="item">
								<div class="img-container">
									<img src="<?php echo get_template_directory_uri(); ?>/img/pension.png" alt="slide">
								</div>
							</div>
						</div>
						
						

						
				</div>
				<div class="btn-right">
						<img src="<?php echo get_template_directory_uri(); ?>/img/btn-right.png" alt="button">
					</div>
				</div>



				<div class="slider-container mobile-container">
					<div class="btn-left">
						<img src="<?php echo get_template_directory_uri(); ?>/img/btn-left.png" alt="button">
					</div>
					<div class="slider slider-mobile">
						<div class="item">
							<div class="img-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slide1.png" alt="slide">
							</div>
						</div>
						<div class="item">
							<div class="img-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/rcn.png" alt="slide">
							</div>
						</div>
						<div class="item">
							<div class="img-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slide3.png" alt="slide">
							</div>
						</div>
						<div class="item">
							<div class="img-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slide4.png" alt="slide">
							</div>
						</div>
						<div class="item">
							<div class="img-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slide5.png" alt="slide">
							</div>
						</div>

						<div class="item">
							<div class="img-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/cspa.png" alt="slide">
							</div>
						</div>
						<div class="item">
							<div class="img-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/daat.png" alt="slide">
							</div>
						</div>
						<div class="item">
							<div class="img-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/fire.png" alt="slide">
							</div>
						</div>
						<div class="item">
							<div class="img-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/Stroke.png" alt="slide">
							</div>
						</div>
						<div class="item">
							<div class="img-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ugle.png" alt="slide">
							</div>
						</div>

						<div class="item">
							<div class="img-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/narpo.png" alt="slide">
							</div>
						</div>
						<div class="item">
							<div class="img-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/pension.png" alt="slide">
							</div>
						</div>
						
						

						
				</div>
					<div class="btn-right">
						<img src="<?php echo get_template_directory_uri(); ?>/img/btn-right.png" alt="button">
					</div>
				</div>
				
			</div>



			<div class="magazine-publishing section">
				<h2><a href="https://www.square7media.co.uk/publishing/" class="title">MAGAZINE PUBLISHING</a></h2>
				<div class="text">
					<div class="first-row">Your magazine deserves the best in publishing, advertising and distribution. At Square7 Media, we offer years of experience and expertise allowing us to help many organisations excel with their publications. We are proud of our work, reputation, and the calibre of our clients. Our vast range of magazine publishing and sales services means that we have everything covered in-house for your publication, whatever your size and goals.</div>

					<div class="second-row">
					From high-quality <a class="underline-bold-link" href="https://www.square7media.co.uk/publishing/">magazine design</a>, editorial content, print, fulfilment, distribution and <a class="underline-bold-link" href="https://www.square7media.co.uk/advertising-services/">magazine advertising</a> services, we’ll make sure that your publication thrives in today’s competitive market. We also offer <a class="underline-bold-link" href="https://www.square7media.co.uk/bespoke-publishing/">bespoke publishing services</a> for unique requests.</div>
				</div>
				<hr>
			</div>



			<!--div class="view-portfolio section-with-bg">
				<div class="text">Click the button to see our well established and diverse portfolio</div>
				<a href="https://www.square7media.co.uk/clients/" class="custom-btn">VIEW PORTFOLIO</a>
			</div-->



			<div class="magazine-advertising section">
				<h2><a href="https://www.square7media.co.uk/advertising-services/" class="title">MAGAZINE ADVERTISING</a></h2>
				<div class="text">
					<div class="first-row">We aim to deliver consistently high quality results which in turn help to increase your advertising revenue. Our advertising sales division generates more than £4 million in advertising revenue – selling in excess of 800 advertising pages and 50 million loose inserts annually.</div>
					<div class="second-row">Our proven formula for success has been demonstrated in over 12 million magazines to date, including well-known publications such as <a class="underline-bold-link" href="https://www.rcn.org.uk/magazines">RCN Bulletin </a> and <a class="underline-bold-link" href="https://www.freemasonrytoday.com/">Freemasonry Today</a>.</div>
				</div>
				<hr>
			</div>



			<!--div class="join-the-list section-with-bg">
				<div class="text">Join the list of our successful clients and brands <br>
Get in touch today to find out more</div>
				<a class="custom-btn" data-toggle="modal" data-target="#exampleModal">BEGIN HERE</a>
			</div-->
				
			<div class="portfolio">
				<div class="test-slider">
					<div class="btn-left slick-arrow">
						<img src="<?php echo get_template_directory_uri(); ?>/img/btn-left.png" alt="button">
					</div>

					<div class="viewport">
						<div class="slides-wrapper">
							<div class="item">
								<div class="portfolio-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/cover.png')">
								</div>
								<div class="portfolio-text">
									
									<div class="text">
										<div class="blockquote">
											<img src="<?php echo get_template_directory_uri(); ?>/img/blockquote.png" alt="blockquote">
										</div>
										The approaches taken by Square7 Media’s design, editorial and advertising staff have been highly professional and have made the transition from an inhouse operation to one that is mainly outsourced, a very smooth one.
									</div>
									<div class="author">
										General Secretary, The Civil Service Pensioners’ Alliance
										<hr>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="portfolio-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/cover2.png')">
								</div>
								<div class="portfolio-text">
									
									<div class="text">
										<div class="blockquote">
											<img src="<?php echo get_template_directory_uri(); ?>/img/blockquote.png" alt="blockquote">
										</div>
										In less than a year they have streamlined the process, increased forward bookings and grown income. We could not be happier with their performance and what is more they are easy to deal with and are now definitely part of our team.
									</div>
									<div class="author">
										Head of Communications, The British Insurance Brokers’ Association
										<hr>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="portfolio-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/cover3.png')">
								</div>
								<div class="portfolio-text">
									
									<div class="text">
										<div class="blockquote">
											<img src="<?php echo get_template_directory_uri(); ?>/img/blockquote.png" alt="blockquote">
										</div>
										Square7 has made an exceptional contribution to Pennant magazine and there has been a marked improvement in the advertising revenues generated so far. Their approachable and friendly staff started with a very attractive and accurate profile of the Society and its magazine and went on to help us in its design and publishing using their experience in the market sector.
									</div>
									<div class="author">
										General Secretary, The Forces Pension Society 
										<hr>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="btn-right slick-arrow">
						<img src="<?php echo get_template_directory_uri(); ?>/img/btn-right.png" alt="button">
					</div>
					</div>
				</div>


			<div class="we-seek">
				<div class="rect">
					We seek to secure long term relationships for <a class="underline-bold-link" href="https://www.square7media.co.uk/publishing/">contract publishing</a>. Pride in our work, reputation and calibre of our clients ensures that every magazine we take on will be nurtured and propelled to success as if it’s our own.  
				</div>
			</div>
			<div class="find-out section-with-bg">
				<div class="text">Find out how <span class="roboto-italic">Square7 Media</span> can deliver the quality you deserve and fill your advertising spaces for<br>
EVERY EDITION!</div>
				<a class="custom-btn" data-toggle="modal" data-target="#exampleModal">BEGIN HERE</a>
			</div>
		</div>

<?php get_footer() ?>