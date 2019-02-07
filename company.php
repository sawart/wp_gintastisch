<?php
/*
Template Name: Company
*/
?>

<?php get_header();?>
	<section class="company">
		<div class="leftCol">
			<?php while(have_posts()) : the_post() ?>
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
			<?php

				if( have_rows('links') ):

					while ( have_rows('links') ) : the_row(); ?>

						<a class="link" href="<?php the_sub_field('link') ?>" target="blank"><?php the_sub_field('name') ?></a>

				<?php endwhile;

				else :

					// no rows found

				endif;

				?>
			<?php endwhile; ?>
		</div>
		<div class="rightCol">
			<?php echo do_shortcode('[contact-form-7 id="152" title="Company form"]'); ?>
		</div>
	</section>
	<section class="companyGain">
		<?php if( have_rows('companyGain') ): ?>

			<?php while ( have_rows('companyGain') ) : the_row(); ?>

				<div><span></span><p><?php the_sub_field("item"); ?></p></div>

			<?php endwhile; ?>
		<?php endif; ?>
	</section>
	<section class="companyContact">
	<h3><?php the_field('supportHeadline');?></h3>
		<h2><?php the_field('supportSubHeadline');?></h2>
		<div class="contact">
			<?php $supporter = get_field('supportImg');?>
			<div class="contactImg"><img src="<?php echo $supporter['url'] ?>" alt="<?php echo $supporter['alt'] ?>"></div>
				<div class="contactInfo">
				<h5><?php the_field('supporter');?></h5>
					<p><?php the_field('supportDescription');?></p>
					<div class="contactDetails">
						<div class="phone">
						<span></span><a href="tel:<?php the_field('phone', 'option');?>"><?php the_field('phone', 'option');?></a>	
						</div>
						<div class="mail">
						<span></span><a href="mailto:<?php the_field('mail', 'option');?>" target="_self"><?php the_field('mail', 'option');?></a>
						</div>
					</div>
				</div>	
		</div>
	</section>
	<section class="companyInspiration">
	<h3><?php the_field('inspirationHeadline');?></h3>
		<h2><?php the_field('inspirationSubHeadline');?></h2>
		<div class="inspirationCarousel owl-carousel owl-theme">
			<?php 

				$bottles = get_field('bottles');

				if( $bottles ): ?>
				
						<?php foreach( $bottles as $bottle ): ?>
	
							<img src="<?php echo $bottle['url']; ?>" alt="<?php echo $bottle['alt']; ?>" />

						<?php endforeach; ?>
			
				<?php endif; ?>
		</div>
	</section>
<?php get_footer(); ?>
