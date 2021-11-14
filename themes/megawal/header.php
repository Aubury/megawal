<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OptiGel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

		<nav id="site-navigation">
			<div class="container betwen">
			<div class="mobile-navigation">
				<button class="menu-toggle" aria-controls="mobile-menu" aria-expanded="false">
					<i class="fas fa-bars"></i>
				</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'mobile',
							'menu_id'        => 'mobile-menu',
						)
					);
					
			?>
			</div>
			<div class="primary-navigation">
			<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
						)
					);
					
			?>
				</div>
			</div>
		</nav><!-- #site-navigation -->.
		
	<header id="masthead" class="site-header">

<header>
	<div class="container">
		<div class="row column-e">
			<div class="col-xs-4">
				<a href="<?php echo home_url()?>" class="logo">
					<!--		              <img src="/wp-content/themes/megawal/img/28.01.19/logo.svg" alt="MEGAWALL">--><span class="head__logo_text">MEGAWALL</span> </a>
				<!--<div class="h1" itemprop="name">Стеклянные офисные перегородки для офисов и ТЦ</div>-->
				<div class="bro-logo-text">
					<h4>Все виды остекления</h4>
					<h5>Перегородки. Фасады. Интерьеры.</h5>
				</div>
			</div>
			<div class="col-xs-1 text-center"></div>
			<div class="col-xs-7">
				<div class="callback">
					<div class="row">
						<div class="col-xs-6 text-right">
							<div><a href="tel:+74951500375" class="callback__phone">+7 (495) 150-03-75 </a>
							<span class="head_time">Ежедневно с 8:00 до 20:00</span></div>
					<div> <a target="_blank" href="http://t.me/megawallmsk">
							<i class="fab fa-telegram" aria-hidden="true"></i>
						  </a> 
						<a target="_blank" href="whatsapp://send?phone=+79953000375">
						<i class="fab fa-whatsapp" aria-hidden="true"></i></a>
					 <a href="mailto:zakaz@megawall.ru" class="callback__mailto">zakaz@megawall.ru</a>
					</div>
						</div>
						<div class="col-xs-6 text-right">
							<a href="/wp-content/themes/megawal/popups/modal-callback.html" class="btn btn-yellow" >Заказать обратный звонок</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="breadcrumbs container"><?php true_breadcrumbs()?></div>
<?php 



	if ( is_front_page() || is_home() || is_front_page() && is_home() ) {



$slides = carbon_get_theme_option( 'slider_content' );

if( $slides ) {
	echo '<div class="AllBuner">
	<div class="bunerSlider">
	<div class="owl-carousel">';
	foreach( $slides as $slide ) {
		
		if( ! $slide[ 'photo' ] ) {
			continue; 
		}
		echo '<div class="slide">'.
		 wp_get_attachment_image( $slide[ 'photo' ], 'full', true, array( 
	'alt' => $slide[ 'title' ],));
		echo '</div>';
	}	 
	
} echo '</div>

</div>
<div class="buner-content">
<div class="offer">
   '.carbon_get_theme_option( 'offer' ).'
</div>';
	 } 
	 echo do_shortcode( '[contact-form-7 id="82" title="Buner Form"]' ). '</div>
	
	 </div> <div class="owlDotsBlock"></div>';
	 ?>
	 
	</header>
		</header><!-- #masthead -->


	