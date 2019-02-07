<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Personalisierter Gin - gintastisch.at</title>
<link href="<?php bloginfo('template_url');?>/css/main.css" rel="stylesheet">
<link href="<?php bloginfo('template_url');?>/css/animations.css" rel="stylesheet">
<!--[if lte IE 9]>
      <link href='css/animations-ie-fix.css' rel='stylesheet'>
<![endif]-->	
<link href="<?php bloginfo('template_url');?>/css/animate.css" rel="stylesheet">
<script>document.addEventListener("touchstart", function(){}, true);</script>
<?php wp_head();?>	
</head>

<body>
	<header>
	<div class="metaNav">
		<div class="phone">
			<span></span><a href="tel:<?php the_field('phone', 'option');?>"><?php the_field('phone', 'option');?></a>	
		</div>
		<div class="mail">
		<span></span><a href="mailto:<?php the_field('mail', 'option');?>" target="_self"><?php the_field('mail', 'option');?></a>
		</div>
	</div>
	<nav class="bg">
		<button class="hamburger hamburger--collapse" type="button">
		  <span class="hamburger-box">
			<span class="hamburger-inner"></span>
		  </span>
		</button>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><div style="background: url('<?php the_field('gintastischLogo', 'option');?>'); background-size: cover" class="logo"></div></a>
			
				<?php wp_nav_menu( array(
						'theme_location' => 'mainMenu',
						'menu_class'	 => 'cl-effect-5 animatedParent',
					) );
			?>	
				
			<!--	<li class="animated fadeInDown"><a href="#"><span data-hover="Konfigurator">Konfigurator</span></a></li>
				<li class="animated fadeInDown delay-500"><a href="inspiration.php"><span data-hover="Inspiration">Inspiration</span></a></li>
				<li class="animated fadeInDown delay-750"><a href="company.php"><span data-hover="Firmen">Firmen</span></a></li>
			-->
	</nav>
	</header>