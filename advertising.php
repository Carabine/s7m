<?php

/*
Template Name: Advertising
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
	<div class="wrapper advertising">
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
			<div class="header-gradient"></div>
			<div class="navbar">
				<a href="https://www.square7media.co.uk/" class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
				</a>
				
				<ul class="nav-links">
					<li><a href="https://www.square7media.co.uk/">Home</a></li>
					<li><a href="https://www.square7media.co.uk/about-us/">About Us</a></li>
					<li><a href="https://www.square7media.co.uk/advertising-services/" class="active">Advertising Sales</a></li>
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
				<h1>Advertising Services</h1>
				<p>Start Increasing Your <br> Advertising Revenue Today</p>
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
			<div class="main-magazine-advertising section">
				<h2>MAGAZINE ADVERTISING</h2>
				<div class="text">
					<div class="first-row bold-row">Are you looking for a highly efficient and results driven 
advertising service for your publication?</div>

					<div class="second-row">
					With Square7 Media taking care of selling advertising space in your magazine, you can be confident on seeing superb results for every publication. Our advertising sales division generates over £4 million in advertising revenue, selling in excess of 800 advertising pages and 50 million loose inserts annually.</div>
				</div>
				<hr>
			</div>
			
			<div class="section section-with-img">
				<div class="text">
					<div class="first-row">
						<div class="img-container" style="background: url(<?php echo get_template_directory_uri(); ?>/img/card2.jpg)">
							
						</div>
						<div class="desc-and-btn">
							<div class="desc">Our display and insert sales are carefully targeted for an aspirational and intelligent readership.</div>
							<a href="https://www.square7media.co.uk/projects/freemasonry-today/" class="custom-btn">Find out more</a>
						</div>
					</div>

					<div class="second-row">
						<div class="img-container" style="background: url(<?php echo get_template_directory_uri(); ?>/img/the-broker_cover-1.jpg)">
							
						</div>
						<div class="desc-and-btn">
							<div class="desc">A great mix of advertisers due to our proactive approach.</div>
							<a href="https://www.square7media.co.uk/projects/the-broker/" class="custom-btn">Find out more</a>
						</div>
					</div>
				</div>
			</div>
			<div class="section expanding-desktop">
				<div class="text text-section-margin">
					<div class="first-row">Our ever expanding portfolio of clients includes six national charities as well as many well known brands. We endeavour to identify your goals and implement a strategy that ensures you meet your targets. Whether you are looking to simply fill </div>

					<div class="second-row">
					spaces within your publication with third party advertising, focus on direct response campaigns or sell loose inserts, we will put together and implement a cost effective sales campaign for you to help you hit all your sales targets. 
					</div>
				</div>
				<hr>
			</div>

			<div class="section expanding-pop">
				<div class="text text-section-margin">
					<div class="first-row">Our ever expanding portfolio of clients includes six national charities as well as many well known brands. We endeavour to identify your goals and implement a strategy that ensures you meet your targets. Whether you are looking to simply fill </div>

					<div class="second-row">
					spaces within your publication with third party advertising, focus on direct response campaigns or sell loose inserts, we will put together and implement a cost effective sales campaign for you to help you hit all your sales targets. 
					</div>
				</div>
				<hr>
			</div>

			<div class="section expanding-hd">
				<div class="text text-section-margin">
					<div class="first-row">Our ever expanding portfolio of clients includes six national charities as well as many well known brands. We endeavour to identify your goals and implement a strategy that ensures you meet your targets. Whether you are looking to simply fill spaces within </div>

					<div class="second-row">
					your publication with third party advertising, focus on direct response campaigns or sell loose inserts, we will put together and implement a cost effective sales campaign for you to help you hit all your sales targets. 
					</div>
				</div>
				<hr>
			</div>

			<div class="section expanding-mobile">
				<div class="text">
					<div class="first-row">Our ever expanding portfolio of clients includes six national charities as well as many well known brands. We endeavour to identify your goals and implement a strategy that ensures you meet your targets. </div>

					<div class="second-row">
					Whether you are looking to simply fill spaces within your publication with third party advertising, focus on direct response campaigns or sell loose inserts, we will put together and implement a cost effective sales campaign for you to help you hit all your sales targets. 
					</div>
				</div>
				<hr>
			</div>

			<div class="section expanding-sechd">
				<div class="text text-section-margin">
					<div class="first-row">Our ever expanding portfolio of clients includes six national charities as well as many well known brands. We endeavour to identify your goals and implement a strategy that ensures you meet your targets. Whether you are looking to simply fill </div>

					<div class="second-row">
					spaces within your publication with third party advertising, focus on direct response campaigns or sell loose inserts, we will put together and implement a cost effective sales campaign for you to help you hit all your sales targets. 
					</div>
				</div>
				<hr>
			</div>

			
			<!--div class="join-the-list section-with-bg">
				<div class="text">Join the list of our successful clients and brands <br>
Get in touch today to find out more</div>
				<a class="custom-btn" data-toggle="modal" data-target="#exampleModal">BEGIN HERE</a>
			</div-->



			
			<div class="loose-insert section">
				<h2>Loose Insert Advertising</h2>
				<div class="text">
					<div class="first-row">
						<div class="img-container" style="background: url('<?php echo get_template_directory_uri(); ?>/img/ann1.png')"></div>
						<div class="img-container" style="background: url('<?php echo get_template_directory_uri(); ?>/img/ann2.png')"></div>
						<div class="img-container" style="background: url('<?php echo get_template_directory_uri(); ?>/img/ann3.png')"></div>
					</div>

					<div class="second-row">
					A great way to bring additional advertising sales to your publication is through loose insert advertising. These can be highly targeted to the desired audience and can work very successfully for our clients, as we’ve seen with the national publication of the <a class="underline-bold-link" href="https://www.ugle.org.uk/">United Grand Lodge of England</a>, <a class="underline-bold-link" href="https://www.freemasonrytoday.com/">Freemasonry Today</a>.
					
					</a>
					</div>
				</div>
				<hr>
			</div>

	
			<!--div class="we-seek your-first-port" style="background: url('<?php echo get_template_directory_uri(); ?>/img/your-first-port.png')">
				<h2>Your First Port of Call</h2>
				<div class="rect">
					Our expertise and reputation, allied to the strength of our portfolio across membership and customer magazines, make us the first – and sometimes 
only – port of call for media planners.  
				</div>
			</div-->



			<!--div class="view-portfolio section-with-bg">
				<div class="text">If you are considering outsourcing your 
magazine, or changing supplier, contact us 
today on <a href="tel:020 3283 4055">020 3283 4055</a>  or email 
<a href="mailto:enquiries@square7media.co.uk">enquiries@square7media.co.uk</a></div>
				<a class="custom-btn" data-toggle="modal" data-target="#exampleModal">Find out more</a>
			</div-->





			<div class="section other-services">
				<h2>OTHER SERVICES</h2>
				<div class="text">
					<div class="first-row bold-row">As well as offering our clients a powerful and effective advertising sales service, we also offer the following services:</div>
					<div class="second-row">
						<div class="col">
							<div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/img/services1.png" alt=""></div>
							<div class="text-for-col">Magazine Publishing</div>
						</div>
						<div class="col">
							<div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/img/services2.png" alt=""></div>
							<div class="text-for-col">Design</div>
						</div>
						<div class="col">
							<div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/img/services3.png" alt=""></div>
							<div class="text-for-col">Distribution</div>
						</div>
						<div class="col">
							<div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/img/services4.png" alt=""></div>
							<div class="text-for-col">Full Outsourcing Processes</div>
						</div>
					</div>
				</div>
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
				

			<div class="find-out section-with-bg">
				<div class="text">Find out how <span class="roboto-italic">Square7 Media</span> can deliver the quality you deserve and fill your advertising spaces for<br>
EVERY EDITION!</div>
				<a class="custom-btn" data-toggle="modal" data-target="#exampleModal">BEGIN HERE</a>
			</div>
		</div>






<?php get_footer() ?>