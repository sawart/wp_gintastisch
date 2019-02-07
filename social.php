<?php
/*
Template Name: Social
*/
?>

<?php get_header(); ?>
	<section class="social">
		<div class="imgGrid">
			
				<?php 

				$images = get_field('gallery');

				if( $images ): ?>
					<div class="gridItem">
						<?php foreach( $images as $image ): ?>
	
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						<?php endforeach; ?>
					</div>
				<?php endif; ?>
				
			</div>
		</div>
		<div class="socialCard">
			<div>
				<?php while(have_posts()) : the_post()?>
				<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>
				<div>
					<?php

					if( have_rows('links') ):
					
						while ( have_rows('links') ) : the_row(); ?>

							<a class="link" href="<?php the_sub_field('link') ?>" target="blank"><?php the_sub_field('name') ?></a>

					<?php endwhile;

					else :

						// no rows found

					endif;

					?>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
