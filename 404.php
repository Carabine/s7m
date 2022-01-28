<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>404</title>
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

<body class="err-404">
	<div class="wrapper">
		<div class="content-404">
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
		<header style="background: none">
			<div class="navbar">
				<a href="https://www.square7media.co.uk/" class="logo">
					<img class="first" src="<?php echo get_template_directory_uri(); ?>/img/blue-logo.png" alt="logo">
					<img class="second" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
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
							<img class="first" src="<?php echo get_template_directory_uri(); ?>/img/phone-black.png" alt="phone">
							<img class="second" src="<?php echo get_template_directory_uri(); ?>/img/phone.png" alt="phone">
							020 3283 4055
						</a>		
					</div>
					<div class="mail">
						<a href="mailto: enquiries@square7media.co.uk">
							<img class="first" src="<?php echo get_template_directory_uri(); ?>/img/mail-black.png" alt="mail">
							<img class="second" src="<?php echo get_template_directory_uri(); ?>/img/mail.png" alt="phone">
							enquiries@square7media.co.uk
						</a>
					</div>
				</div>
				<div class="nav-icon">
					<img class="first" src="<?php echo get_template_directory_uri(); ?>/img/dark-nav-icon.png" alt="navbar icon">
					<img class="second" src="<?php echo get_template_directory_uri(); ?>/img/nav-icon.png" alt="navbar icon">
				</div>
			</div>
		</header>
		
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

			<div class="page-not-found">
				<h1>404</h1>
				<p>PAGE NOT FOUND</p>
			</div>
		</div>
		<div class="footer-404">
			<div class="join-the-list section-with-bg">
				<div class="text">Join the list of our successful clients and brands <br>
Get in touch today to find out more</div>
				<a class="custom-btn" data-toggle="modal" data-target="#exampleModal">BEGIN HERE</a>
			</div>
	

			<footer>
			<div class="contacts">
				<div class="flag">
					<div class="flag-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/flag.png" alt="flag.">
					</div>
					<a>Square7 Media, 3 More London <br>
					London SE1 2RE</a> 
				</div>
				<div class="agenda">
					<div class="agenda-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/agenda.png" alt="agenda">
					</div>

					<div class="col1">
						TEL: <br>
						EMAIL:
					</div>
					<div class="col2">
						<a href="tel:020 3283 4055" >020 3283 4055</a>
						<a href="mailto:enquiries@square7media.co.uk">enquiries@square7media.co.uk </a>
					</div> 	
				</div>
				<a href="https://www.square7media.co.uk/" class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png" alt="logo">
				</a>
			</div>
			<div class="rights">
				© 2020 Square7 Media. All Rights Reserved. 
			</div>
		</footer>
	</div>	
</div>
	
<?php wp_footer() ?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slider.js"></script>



<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>



</body>
</html>