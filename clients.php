<?php

/*
Template Name: Clients
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

<body class="brands">
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
					<img class="first" src="<?php echo get_template_directory_uri(); ?>/img/black-left-logo.png" alt="logo">
					<img class="second" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
				</a>
				
				<ul class="nav-links">
					<li><a href="https://www.square7media.co.uk/">Home</a></li>
					<li><a href="https://www.square7media.co.uk/about-us/">About Us</a></li>
					<li><a href="https://www.square7media.co.uk/advertising-services/">Advertising Sales</a></li>
					<li><a href="https://www.square7media.co.uk/publishing/">Publishing Services</a></li>
					<li><a href="https://www.square7media.co.uk/clients/" class="active">Clients</a></li>
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
					<img src="<?php echo get_template_directory_uri(); ?>/img/nav-icon.png" alt="navbar icon">
				</div>
			</div>

			<div class="header-content">
				<h1>Clients</h1>
				<p>Our portfolio of clients speaks for itself</p>
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
			<div class="brands-we-work section">
				<h2>Clients we work with</h2>
				<div class="text">
					<div class="first-row">When choosing a publishing company to take care of your magazine’s publishing and advertising, a diverse portfolio reassures you that you will be in good hands. With many well known publications trusting us to manage their publishing, print, advertising and distribution, you can be confident that you will receive a five star treatment from start to finish with Square7 Media.</div>
					<div class="second-row">If you’re looking for a competitive charging structure focusing on achieving your revenue forecasts with a high calibre of advertisers, get in touch with us today. We work with a range of brands including some well known magazine publications, some with over half a million reach. Contact us to discuss your specific requirements and we will work with you to achieve your goals and vision for the future.</div>
				</div>
				<hr>
			</div>

			<div class="portfolio-cards">
				<?php   
	            	global $post;

	// записываем $post во временную переменную $tmp_post
				    $tmp_post = $post;
				    $args = array(
				        'numberposts' => 100,
				        'post_type'   => 'projects'

				    );

				    $myposts = get_posts( $args );
				    foreach( $myposts as $post ){
				        setup_postdata($post);
				        $image = get_field('logo');


				?>

	            <div class="item">
					<a class="a1" href="<?php the_permalink() ?>">
						<div class="div1" href="#">
								<div class="div2" style="background-image: url(<?php 
                              echo get_the_post_thumbnail_url() ?>);"></div>
								<div class="details">
									<!--img src="<?php echo $image['url'] ?>" alt=""-->
									<span class="title"><?php the_title() ?></span>
									<span class="info"><?php the_field('desc') ?></span>
									<button onclick="window.location.href = '#'" class="more">> more info</button>
								</div>
						</div>
					</a>
				</div>
				<?php
			    }
			    	wp_reset_postdata();
			    ?>
				<div class="item item-btn">
					<a class="custom-btn" data-toggle="modal" data-target="#exampleModal">BEGIN HERE</a>
				</div>
			</div>
			
			<div class="add-your-publication section">
				<h2>Add Your Publication to Our Portfolio</h2>
				<div class="text">
					<div class="first-row">Square7 Media's portfolio includes a wide range of membership, customer and charity magazines. Our growing portfolio reflects our expertise offering magazine design, advertising sales and magazine publishing. With titles including a distribution range of under 100,000 to over half a million, we offer a wealth of experience to meet your specific magazine publishing and advertising requirements - regardless of your size or coverage.</div>

					<div class="second-row">Our diverse portfolio of clients reflects our passion and innovative approach with everything we do.  We often work with major brands through word of mouth recommendation – the majority of our clients find us this way due to our strong and continually growing reputation for delivering exactly what we promise.</div>
				</div>
				<hr>
			</div>

			<div class="want-to-find section" style="background-color: #f3f3f3;">
				<h2>Want To Find Out More?</h2>
				<div class="text">
					<div class="first-row">At Square7 Media, we like to keep things simple yet effective. Our clients can relax in the knowledge that we will secure their advertising sales and publish a high standard magazine, without having to worry about any of the technicalities.  If you have any questions about our any of our services and processes, or would like to become one of the brands on our portfolio, please feel free to call us on <a href="tel: 020 3283 4055">020 3283 4055</a> or email <a href="mailto: enquiries@square7media.co.uk">enquiries@square7media.co.uk.</a> </div>
					
					<div class="second-row">If you are looking for a specialist approach with a personal touch and great results, we’ll be happy to discuss all your requirements and future plans with a free, no obligation quote.  Simply click the button below or use the contact details above to get started!</div>
				</div>
				<hr>
			</div>

			<div class="join-the-list section-with-bg">
				<div class="text">Join the list of our successful clients and brands <br>
Get in touch today to find out more</div>
				<a class="custom-btn" data-toggle="modal" data-target="#exampleModal">BEGIN HERE</a>
			</div>




<?php get_footer() ?>