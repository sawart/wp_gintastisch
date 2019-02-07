<footer>
		<div class="footerCol">
			<h5>Kontakt</h5>
			<p><?php the_field('address', 'option'); ?>
					<br>
				<?php the_field('phone', 'option');?><br>
				<a href="mailto:<?php the_field('mail', 'option');?>"><?php the_field('mail', 'option');?></a></p>
		</div>
		<div class="footerCol">
			<h5>Service</h5>
			<?php wp_nav_menu( array(
						'theme_location' => 'footerMenu',
						'menu_class'	 => 'sitemap cl-effect-5',
					) );
			?>	
		</div>
		<div class="footerCol">
			<h5>Zahlungsarten</h5>
			<div class="paymentGrid">
				<?php if( have_rows('paymentOptions', 'option') ): ?>

				<?php while( have_rows('paymentOptions', 'option') ): the_row(); 

					// vars
					$logo = get_sub_field('logo', 'option');

					?>

					<div class="payItem">

							<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>" />

						<?php if( $link ): ?>
							</a>
						<?php endif; ?>

					</div>

				<?php endwhile; ?>


				<?php endif; ?>
			</div>
		</div>
		<div class="footerCol socialMedia">
			<?php if( have_rows('socialMedia', 'option') ): ?>

				<?php while( have_rows('socialMedia', 'option') ): the_row(); 
						// vars
						$icon = get_sub_field('icon', 'option');
						$smLink = get_sub_field('page', 'option');
					?>

					<div class="socialItem">

						<?php if( $smLink ): ?>
							<a href="<?php echo $smLink; ?>" target="_blank">
						<?php endif; ?>

							<img class="svg" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>" />

						<?php if( $smLink ): ?>
							</a>
						<?php endif; ?>

					</div>

				<?php endwhile; ?>


				<?php endif; ?>
		</div> <!-- socialMedia END -->
	</footer>
	<div class="copyright">&copy; 2019 – <?php echo date('Y'); ?> <?php bloginfo('description'); ?></div>
	
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="<?php bloginfo('template_url');?>/js/main.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url');?>/js/css3-animate-it.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url');?>/js/jquery.drawsvg.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/owl.carousel.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		  $('.inspirationCarousel').owlCarousel({
				loop:true,
				margin:10,
				nav:true,
				responsive:{
					0:{
						items:1
					},
					575:{
						items:3
					},
					1000:{
						items:5
					}
				}
			});
		});
	$(document).ready(function(){
			$('.ginCarousel').owlCarousel({
				dots: false,
				loop: true,
				autoplay: true,
				nav: false,
				autoWidth:true,
				autoplayTimeout: 3000,
				animateOut: 'zoomOut',
				animateIn: 'zoomIn',
				items:1,
				stagePadding:30,
				smartSpeed:150,
			});
		}) 
		$(document).ready(function(){
			$('.customerGrid').owlCarousel({
				loop: true,
				autoplay: true,
				items:5,
				stagePadding:30,
				smartSpeed:150,
				responsive:{
					0:{
						items:1
					},
					575:{
						items:3
					},
					1000:{
						items:5
					}
				}
			});
		})
		$(document).ready(function(){
			$('.quote').owlCarousel({
				loop: true,
				items:1,
				smartSpeed:150,
			});
		})
	
		var $doc = $(document),
			$win = $(window),
			$svg = $('.cls-1').drawsvg(),
			max = $doc.height() - $win.height();

		$win.on('scroll', function() {
		  var p = $win.scrollTop() / 1500;
		  $svg.drawsvg('progress', p);
		});
	</script>
<?php wp_footer();?>
</body>
</html>