<?php get_header() ?>

<body>
	<div class="wrapper single">
		<div class="single-content">
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
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				$image = get_field('logo'); 
				$gal = get_post_gallery_images();
			?>
			
			<div class="single-project section">
				<!--h2><?php the_title() ?></h2-->
				<div class="two-rows">
					<div class="first-row" style="background-image: url(<?php 
                              echo get_the_post_thumbnail_url() ?>);">

					</div>
					<div class="second-row">
						<div class="header">
							<span>Client:</span> <?php the_field('client') ?> <br>
							<span>Category:</span> <?php the_field('cat') ?>
						</div>
						<div class="project-text">
							<?php
							$content = wpautop(get_the_content());
							echo preg_replace('/\[(.*?)\]/', '', $content);
							 ?> 
						</div>
						<div class="img-container">
							<img src="<?php echo $image['url'] ?>" alt="">
						</div>
						<hr>
					</div>
				</div>
				<div class="slider-container">
					<div class="btn-left">
						<img src="<?php echo get_template_directory_uri(); ?>/img/btn-left.png" alt="button">
					</div>
					<div class="slider">
						<?php foreach($gal as $url) { ?>
							<a href="<?php echo str_replace('-150x150', '', $url) ?>" class="fancybox" rel="fancybox">
								<div class="item-container">
									<div class="item" style="background: url(<?php echo str_replace('-150x150', '', $url) ?>)"></div>
								</div>
							</a>
							
						<?php } ?>
						
						
						
						
						
						
					</div>
					<div class="btn-right">
						<img src="<?php echo get_template_directory_uri(); ?>/img/btn-right.png" alt="button">
					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>		
		</div>
		<div class="single-footer">
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

