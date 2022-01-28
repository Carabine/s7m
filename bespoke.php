<?php

/*
Template Name: Bespoke Publishing
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
	<div class="wrapper bespoke">
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
		<header style="background: url(<?php echo get_template_directory_uri(); ?>/img/bespoke-header-bg.png)">
			<div class="header-gradient"></div>
			<div class="navbar">
				<a href="https://www.square7media.co.uk/" class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
				</a>
				
				<ul class="nav-links">
					<li><a href="https://www.square7media.co.uk/">Home</a></li>
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
				<h1>Bespoke
Publishing</h1>
				<p>Professional magazine <br> publishing</p>
				<!--a data-toggle="modal" data-target="#exampleModal" class="custom-btn">Contact Us</a-->
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
			<div class="customized-publishing section">
				<h2>Customised Publishing</h2>
				<div class="text">
					<div class="first-row">At Square7 Media, as part of our publishing services, we are frequently commissioned to undertake bespoke projects on behalf of our clients. Previous projects include commemorative supplements and guides, promotional magazines, annual reports and direct mail campaigns.
					<br><br>
					We have published on behalf of Equiniti, Volvo, Cavendish Financial, the Civil Service Pensioners' Alliance, Seadrill, the Oddfellows Friendly Society, SEAT and the Civil Service Retirement Fellowship. </div>

					<div class="second-row">
					Our menu of services can range from content and design through to printing and distribution. We offer a flexible approach and cost-effective solutions designed to help you fulfil your objectives.
					<div class="btn-container">
						<a  data-toggle="modal" data-target="#exampleModal" class="custom-btn">Find out more</a>
					</div>
					

					</div>
				</div>
				<hr>
			</div>
			
			<div class="we-seek your-first-port" style="background: url('<?php echo get_template_directory_uri(); ?>/img/your-first-port.png')">
				<h2>Your First Port of Call</h2>
				<div class="rect">
					Our expertise and reputation, allied to the strength of our portfolio across membership and customer magazines, make us the first – and sometimes 
only – port of call for media planners.  
				</div>
			</div>
			

			<div class="view-portfolio section-with-bg">
				<div class="text">If you are considering outsourcing your 
magazine, or changing supplier, contact us 
today on <a href="tel:020 3283 4055">020 3283 4055</a> or email  <a href="mailto:enquiries@square7media.co.uk">enquiries@square7media.co.uk</a>
				</div>
				<a class="custom-btn" data-toggle="modal" data-target="#exampleModal">find out more</a>
			</div>

			

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