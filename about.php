<?php

/*
Template Name: About
*/

?>

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
	<div class="wrapper about">
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
		<header style="background: url(<?php echo get_template_directory_uri(); ?>/img/about-header-bg.jpg)">
			<div class="header-gradient"></div>
			<div class="navbar">
				<a href="https://www.square7media.co.uk/" class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
				</a>
				
				<ul class="nav-links">
					<li><a href="https://www.square7media.co.uk/">Home</a></li>
					<li><a href="https://www.square7media.co.uk/about-us/" class="active">About Us</a></li>
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
				<h1>About Us</h1>
				<p>Choose excellence, <br> innovation and quality</p>
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
			<div class="custom-modal-overlay no-active">
				<div class="custom-modal-content">
					<div class="contacts-form">
						<form action="" id="my-form">
							<div class="form-container">
								<?php echo do_shortcode('[ninja_form id=1]'); ?>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="our-history section">
				<h2>Our History</h2>
				<div class="text">
					<div class="first-row">Square7 Media was launched in 2003. Today, we are responsible for the publishing and advertising sales of over 12 million home-mailed magazines. We pride ourselves on our client list, the UK’s largest portfolio of membership and customer publications.
					Our results-based advertising sales division has grown hugely over the past 17 years. </div>

					<div class="second-row">
					We have organically diversified into full magazine publishing, and now produce numerous publications on behalf of our well-respected clients. This includes editorial content and design services, as well as print management, fulfilment and magazine distribution. </div>
				</div>
				<hr>
			</div>
			
			<div class="section about-section-with-img">
				<div class="text">
					<div class="first-row">
						<a href="https://www.square7media.co.uk/publishing/" class="img-container2">
							<div class="img-container" style="background: url(<?php echo get_template_directory_uri(); ?>/img/about-img1.png)">
							
							</div>
							<span>find out more</span>
						</a>
						The Square7 publishing team offers high-quality magazine design, bespoke editorial content and a complete range of publishing and distribution services - print or digital, large or small.
					</div>

					<div class="second-row">
						<a href="https://www.square7media.co.uk/advertising-services/" class="img-container2">
							<div class="img-container" style="background: url(<?php echo get_template_directory_uri(); ?>/img/amvertising-bg-header.png)">
							
							</div>
							<span>find out more</span>
						</a>
						
					Our advertising sales division generates more than £4 million in advertising revenue, selling in excess of 800 advertising pages and 50 million loose inserts annually.  
					</div>
				</div>
				<!--a class="custom-btn" data-toggle="modal" data-target="#exampleModal">Get started</a-->
			</div>

			<div class="section about-magazine-publishing about-magazine-publishing-desktop">
				<h2>Magazine Publishing <br> and Advertising</h2>
				<div class="text">
					<div class="first-row">Our experience and reputation for excellence, innovation and quality across a broad spectrum of magazines, along with our knowledge and wide range of industry contacts, allows us to meet all our clients’ advertising revenue and publishing goals. 
					Our team of independent, highly skilled and passionate experts will bring you the design and print </div>

					<div class="second-row">
					 quality you seek along with increasing your advertising revenue to hit your annual targets. For revitalised advertising sales, innovative content and the perfect publishing solution, contact us on <a class="underline-bold-link" href="tel:020 3283 4055">020 3283 4055</a> or email  <a class="underline-bold-link" href="mailto:enquiries@square7media.co.uk">enquiries@square7media.co.uk</a>
					</div>
				</div>
				<hr>
			</div>

			<div class="section about-magazine-publishing about-magazine-publishing-hd">
				<h2>Magazine Publishing <br> and Advertising</h2>
				<div class="text">
					<div class="first-row">Our experience and reputation for excellence, innovation and quality across a broad spectrum of magazines, along with our knowledge and wide range of industry contacts, allows us to meet all our clients’ advertising revenue and publishing goals. 
					Our team of independent, highly skilled and passionate experts </div>

					<div class="second-row">
					 will bring you the design and print quality you seek along with increasing your advertising revenue to hit your annual targets. For revitalised advertising sales, innovative content and the perfect publishing solution, contact us on <a class="underline-bold-link" href="tel:020 3283 4055">020 3283 4055</a> or email  <a class="underline-bold-link" href="mailto:enquiries@square7media.co.uk">enquiries@square7media.co.uk</a>
					</div>
				</div>
				<hr>
			</div>

			<div class="section about-magazine-publishing about-magazine-publishing-mobile">
				<h2>Magazine Publishing <br> and Advertising</h2>
				<div class="text">
					<div class="first-row">Our experience and reputation for excellence, innovation and quality across a broad spectrum of magazines, along with our knowledge and wide range of industry contacts, allows us to meet all our clients’ advertising revenue and publishing goals.</div>

					<div class="second-row">
					 Our team of independent, highly skilled and passionate experts will bring you the design and print quality you seek along with increasing your advertising revenue to hit your annual targets. For revitalised advertising sales, innovative content and the perfect publishing solution, contact us on <a class="underline-bold-link" href="tel:020 3283 4055">020 3283 4055</a> or email  <a class="underline-bold-link" href="mailto:enquiries@square7media.co.uk">enquiries@square7media.co.uk</a>
					</div>
				</div>
				<hr>
			</div>

			
			<div class="section the-one-stop">
				<div class="text">
					<div class="first-row bold-row">The one-stop agency for membership and customer magazines</div>

					<div class="second-row">
					Square7 Media's portfolio keeps on growing thanks to our commitment to projects through word of mouth recommendations. By delivering on expectations, be it publishing or advertising, our strong reputation amongst our clients is constantly growing. We are competitive with our charging structure and focus on achieving the revenue forecasts and the calibre of publication and advertisers that our clients deserve.
				</a>
					</div>
				</div>
				<hr>
			</div>
			

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
				


		<div class="join-the-list section-with-bg">
				<div class="text">Join the list of our successful clients and brands <br>
Get in touch today to find out more</div>
				<a class="custom-btn" data-toggle="modal" data-target="#exampleModal">BEGIN HERE</a>
			</div>



<?php get_footer() ?>