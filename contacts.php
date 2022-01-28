<?php

/*
Template Name: Contacts
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
	<div class="wrapper contacts-page">
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
		<header style="background: url(<?php echo get_template_directory_uri(); ?>/img/contacts-header-bg.jpg)">
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
					<li><a href="https://www.square7media.co.uk/contact/" class="active">Contact</a></li>
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
				<h1>Find out more</h1>
				<p>Find out why we are trusted by many well-known brands</p>
				<!--a class="custom-btn" data-toggle="modal" data-target="#exampleModal">Contact us</a-->
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
			<div class="get-in-touch section">
				<h2>GET IN TOUCH TODAY</h2>
				<div class="text">
					<div class="first-row">To find out how we can help take your publication forward and increase your advertising sales, simply fill out the form and tell us what you're looking for. We'll get back to you as soon as possible for a friendly, confidential chat with a free, no obligation quote.</div>

					<div class="second-row">
						<div class="flag">
							<div class="flag-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/flag.png" alt="flag.">
							</div>
							<a href="#">Square7 Media, 3 More London <br>
							London SE1 2RE</a> 
						</div>
						<div class="agenda">
							<div class="agenda-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/agenda.png" alt="agenda">
							</div>

							<div class="col1">
								<span>TEL:</span> <a href="tel:020 3283 4055" >020 3283 4055</a> <br>
								<span>EMAIL:</span>  <a href="mailto:enquiries@square7media.co.uk">enquiries@square7media.co.uk </a>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="contacts-form">
				<div class="form-text">
					To find out how Square7 Media can help your publication to excel with your brand image and advertising sales, simply fill out the form below and we'll be in touch straight away.
				</div>
				<form action="" id="my-form">
					<div class="form-container">
						<?php echo do_shortcode('[ninja_form id=1]'); ?>
					</div>
				</form>
					
					
			</div>
			
			<div class="map-responsive">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9934.000310748623!2d-0.0797555!3d51.5040409!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x29455e2c9157f9b1!2sSquare7%20Media!5e0!3m2!1sen!2sua!4v1581442732142!5m2!1sen!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>

<?php get_footer() ?>