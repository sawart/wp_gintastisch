<?php
/*
Template Name: Inspiration
*/
?>

<?php get_header(); ?>
	<section class="inspiration">
	<div class="leftCol" style="background: url(<?php the_field('mainImg'); ?>) no-repeat; background-size: cover"></div>
	<div class="rightCol">
		<div style="background: url(<?php the_field('descriptionImg'); ?>); background-size: cover; background-position: center center;" class="square">
		</div>
		<div class="square red">
			<?php while(have_posts()) : the_post() ?>
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
		<div class="square gray">
			<h3><?php the_field('customerHeadline'); ?></h3>
			<div class="quote owl-carousel">
				<?php

				if( have_rows('quotes') ):

					while ( have_rows('quotes') ) : the_row();
				
						echo "<div>";
						the_sub_field('quote');
						echo "<p class='customerName'>";
						the_sub_field('name');
						echo "</p>";
						echo "</div>";
						
					endwhile;

				else :

					// no rows found

				endif;

				?>
			</div>
		</div>
	</div>
	</section>

		<?php if( have_rows('row') ): ?>


			<?php while ( have_rows('row') ) : the_row() ?>
				
				<section class="inspirationGrid">

						<?php if(have_rows('column')) : ?>
					
							<?php /* Second Repeater */ ?>
								
								<?php if( have_rows('column') ): ?>

									<?php while ( have_rows('column') ) : the_row(); ?>
										<?php $col = get_sub_field('columnWidth'); ?>	
										<div class="item <?php echo $col ?>" style="background: url(<?php the_sub_field('img'); ?>) no-repeat; background-size: cover;">
											<figcaption>
												<h3><?php the_sub_field('headline'); ?></h3>
												<?php the_sub_field('description'); ?>
												<div class="linkBox">
													
														<?php if( have_rows('links') ): ?>

															<?php while ( have_rows('links') ) : the_row(); ?>

																<a class="link" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('linkText'); ?></a>
																
															<?php endwhile; ?>

														<?php else : ?>


														<?php endif; ?>

												</div>
											</figcaption>
										</div>

									<?php endwhile; ?>

								<?php endif; ?>

							<?php /* Second Repeater END */ ?>

						<?php endif; ?>
						
				</section>
			<?php
			endwhile;

		else :

			// no rows found

		endif;

		?>



					

<?php get_footer(); ?>
