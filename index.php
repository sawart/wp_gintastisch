<?php get_header();?>
	<section class="introWrapper" style="background: url(<?php the_field('landscapeBackground', 'option');?>) no-repeat bottom; background-size: cover;">
		<div class="intro">
			<div class="bottle animatedParent">
				<div class="ginCarousel owl-carousel animated fadeInDown">
					 <?php if( have_rows('bottleAnimation') ): ?>

									<?php while ( have_rows('bottleAnimation') ) : the_row(); ?>

										<div><img src="<?php echo the_sub_field('bottle');?>"></div>

									<?php endwhile; ?>
								<?php endif; ?>
				</div>
			</div>
			<div class="introTextWrapper animatedParent">
				<div class="introText">
				<h1 class="animated fadeInDown"><?php the_field('headline');?></h1>
					<div class="advantages">
						
							 <?php if( have_rows('advantages') ): ?>
						
								<?php $count = 0; ?>

	
								<?php while ( have_rows('advantages') ) : the_row(); ?>

									
									<div class="item animated fadeInUp <?php echo "delay-$count"?>"><span></span><p><?php the_sub_field("advantage"); ?></p></div>
									

								<?php $count = $count + 250; endwhile; ?>
							<?php endif; ?>

					</div>
				</div>
				<div id="buttons">
					<?php if( have_rows('buttons') ): ?>

						<?php $count = 1000; ?>


						<?php while ( have_rows('buttons') ) : the_row(); ?>

							<a class="btn btnEffect animated fadeInUp <?php echo "delay-$count"?>" href="<?php echo the_sub_field('link');?>"><?php echo the_sub_field('button');?></a>

						<?php $count = $count + 250; endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<section class="wrapper">
		<h3><?php the_field('h3');?></h3>
		<h2><?php the_field('h2');?></h2>
		<div class="intro">
			<div class="leftText">
				<div class="ingredients">
					<?php if( have_rows('botanicalsLeft') ): ?>

						<?php $count = 1000; ?>


						<?php while ( have_rows('botanicalsLeft') ) : the_row(); ?>

							<div class="item">
								<h3><?php the_sub_field('headline');?><span class="addIcon"></span></h3>
								<p><?php the_sub_field('text');?></p>
							</div>

						<?php $count = $count + 250; endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="bottleAnimation">
				<svg class="cls-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 149.15 376.73"><g id="Pfad"><path class="cls-1" d="M162.42,130.33C156.79,120,134.57,109,128.34,104.85s-6.22-10.07-6.22-10.07L122.71,53l.3-22.22,1.19-2.08s.89-11.85,1.48-19.85S91.9,1.74,91.9,1.74,57.53.85,58.12,8.85,59.6,28.7,59.6,28.7l1.19,2.08L61.09,53l.59,41.78s0,5.92-6.22,10.07S27,120,21.38,130.33c0,0-3.55,5.34-3.55,24.89s3.55,181.33,3.55,181.33,3.85,19,30.82,33.49c0,0,11.85,6.81,39.7,7.4,27.85-.59,39.7-7.4,39.7-7.4,27-14.52,30.82-33.49,30.82-33.49S166,174.78,166,155.22,162.42,130.33,162.42,130.33Z" transform="translate(-17.33 -1.21)"/></g></svg>
			</div>
			<div class="rightText">
				<div class="ingredients">
					<?php if( have_rows('botanicalsRight') ): ?>

						<?php $count = 1000; ?>


						<?php while ( have_rows('botanicalsRight') ) : the_row(); ?>

							<div class="item">
								<h3><?php the_sub_field('headline');?><span class="addIcon"></span></h3>
								<p><?php the_sub_field('text');?></p>
							</div>

						<?php $count = $count + 250; endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div> <!-- INTRO END -->
	</section>
	<section class="teaser">
		<?php
	
				$args = array(
				"post_type" => 'teaser',
				"post_per_page" => -1,
				"order" => "ASC",
				);

				// the query
				$the_query = new WP_Query( $args ); ?>

				<?php if ( $the_query->have_posts() ) : ?>

					<!-- pagination here -->

					<!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="item" style="background: url(<?php the_field('teaserImg'); ?>) no-repeat; background-size: cover;">
							<figcaption>
								<h3><?php the_title(); ?></h3>
								<a class="link" href="<?php the_field('teaser'); ?>">mehr Ideen</a>
							</figcaption>
						</div>
					<?php endwhile; ?>
					<!-- end of the loop -->

					<!-- pagination here -->

					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php esc_html_e( 'Kein Beitrag vorhanden' ); ?></p>
			<?php endif; ?>
	</section>
	<section class="confiBtn">
		<a href="#"><h1>Zum Konfigurator</h1></a>
	</section>
	<section class="boxWrapper">
		<div class="leftBox" style="background: url(<?php the_field('squareBackground', 'option');?>) no-repeat; background-size: cover;">
			<div class="innerBox">
				<h4><?php the_field('ginHeadline');?></h4>
				<a class="link" href="<?php echo the_field('gintastischLink');?>"><?php the_field('gintastischLinkText');?></a>
			</div>
		</div>
		<div class="rightBox" style="background: url(<?php the_field('gintastischBackground');?>) no-repeat; background-size: cover;"></div>
	</section>
	<section class="customer">
		<h3><?php the_field('ch3');?></h3>
		<h2><?php the_field('ch2');?></h2>
		<div class="customerGrid owl-carousel">
			
			
			<?php
			
				$args = array(
				"post_type" => 'customer',
				"post_per_page" => -1,
				"order" => "ASC",
				);

				// the query
				$the_query = new WP_Query( $args ); ?>

				<?php if ( $the_query->have_posts() ) : ?>

					<!-- pagination here -->

					<!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div>
							<?php $logo = get_field('logo'); ?>
						<a href="<?php echo the_field('website'); ?>" target="_blank"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"></a>
						</div>
					<?php endwhile; ?>
					<!-- end of the loop -->

					<!-- pagination here -->

					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php esc_html_e( 'Leider kein Logo vorhanden.' ); ?></p>
				<?php endif; ?>
		</div>
	</section>
<section class="limomacher">
		<div class="leftLimoBox" style="background: url(<?php the_field('limoBackground');?>) no-repeat center; background-size: cover;">
			<div class="innerBox">
				<img src="<?php the_field('limoLogo');?>" alt="Limomacher Logo">
			</div>
		</div>
		<div class="rightLimoBox">
			<div class="innerBox">
				<h3><?php the_field('limoHeadline');?></h3>
				<?php the_field('limoText');?>
				<a class="link" href="<?php the_field('limoWebsite');?>"><?php the_field('limoLinkText');?></a>
			</div>
		</div>
	</section>
<?php get_footer();?>
