<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kozly
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700&display=swap&subset=cyrillic-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="loaderArea">
		<div class="loader"></div>
</div>
<header class="header" id="header">
		<div class="header__inner" id="header__inner">
			<a href="<?php echo home_url();?>" class="header__logo">
				<div class="logo__img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/logo.svg" alt="Logo">
				</div>
				<div class="logo__text">
					<b>KOZLY.AGENCY</b><br>
					<?php pll_e('Текст в левой колонке'); ?>
				</div>
</a>
			<div class="header__subscribe">
				<a href="#" id="SEND_MALLING" class="subscribe__text"><?php pll_e('Подпишись на рассылку'); ?></a>
				<div class="subscribe__icon">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/mail-subscribe.svg" alt="">
				</div>
			</div>
			<div class="header__social">
				<div class="social__icon">
					<a href="<?php the_field('ssylka_na_instagram', pll_current_language('slug')); ?>">
						<svg width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M13.9204 6.83594C10.2167 6.83594 7.14795 9.85181 7.14795 13.6084C7.14795 17.365 10.1638 20.3809 13.9204 20.3809C17.6771 20.3809 20.6929 17.3121 20.6929 13.6084C20.6929 9.90472 17.6241 6.83594 13.9204 6.83594ZM13.9204 17.947C11.5395 17.947 9.58181 15.9894 9.58181 13.6084C9.58181 11.2275 11.5395 9.2698 13.9204 9.2698C16.3014 9.2698 18.2591 11.2275 18.2591 13.6084C18.2591 15.9894 16.3014 17.947 13.9204 17.947Z" fill="white"/>
						<path d="M20.9577 8.21136C21.8052 8.21136 22.4921 7.52439 22.4921 6.67697C22.4921 5.82955 21.8052 5.14258 20.9577 5.14258C20.1103 5.14258 19.4233 5.82955 19.4233 6.67697C19.4233 7.52439 20.1103 8.21136 20.9577 8.21136Z" fill="white"/>
						<path d="M24.9258 2.70886C23.5501 1.28029 21.5925 0.539551 19.3703 0.539551H8.47079C3.86761 0.539551 0.798828 3.60833 0.798828 8.21151V19.0581C0.798828 21.3332 1.53957 23.2909 3.02105 24.7194C4.44962 26.0951 6.35438 26.7829 8.5237 26.7829H19.3173C21.5925 26.7829 23.4972 26.0422 24.8729 24.7194C26.3015 23.3438 27.0422 21.3861 27.0422 19.111V8.21151C27.0422 5.98929 26.3015 4.08452 24.9258 2.70886ZM24.7142 19.111C24.7142 20.7512 24.1322 22.0739 23.1798 22.9734C22.2274 23.8729 20.9046 24.3491 19.3173 24.3491H8.5237C6.93639 24.3491 5.61364 23.8729 4.66126 22.9734C3.70888 22.021 3.23269 20.6983 3.23269 19.0581V8.21151C3.23269 6.62421 3.70888 5.30146 4.66126 4.34908C5.56073 3.4496 6.93639 2.97341 8.5237 2.97341H19.4232C21.0105 2.97341 22.3332 3.4496 23.2856 4.40199C24.1851 5.35437 24.7142 6.67712 24.7142 8.21151V19.111Z" fill="white"/>
						</svg>
					</a>
				</div>
				<div class="social__icon">
					<a href="<?php the_field('ssylka_na_youtube', pll_current_language('slug')); ?>">
						<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M14.9823 26.1506C11.8593 26.1682 8.73622 26.1272 5.61904 25.9572C4.60536 25.8986 3.59169 25.8107 2.67177 25.3127C2.05654 24.9787 1.58193 24.5158 1.2831 23.8596C0.779193 22.7697 0.620989 21.6213 0.527239 20.4494C0.328021 18.0295 0.316302 15.6096 0.421771 13.1955C0.474505 11.9123 0.515521 10.6174 0.820208 9.35762C0.937396 8.86543 1.10732 8.38497 1.33583 7.92793C1.8749 6.85567 2.8124 6.32247 3.94326 6.09981C4.89247 5.91231 5.86513 5.91817 6.83193 5.87715C10.1073 5.74239 13.3886 5.67207 16.6698 5.70723C19.1952 5.73653 21.7265 5.80098 24.2519 5.92989C25.0311 5.9709 25.8163 5.98262 26.5604 6.25801C27.5683 6.63301 28.3183 7.26582 28.7226 8.29121C29.1151 9.27559 29.2675 10.2951 29.3495 11.3439C29.578 14.1916 29.5839 17.0393 29.3964 19.8869C29.3319 20.8479 29.2675 21.8088 29.0155 22.7522C28.4472 24.9201 27.0936 25.7697 25.1073 25.9045C22.9862 26.0451 20.8593 26.1213 18.7323 26.1506C17.4843 26.1623 16.2304 26.1506 14.9823 26.1506ZM11.9061 20.1564C14.7421 18.6037 17.5429 17.0686 20.3905 15.51C17.537 13.9455 14.7362 12.4162 11.9061 10.8635C11.9061 13.9865 11.9061 17.051 11.9061 20.1564Z" fill="white"/>
						</svg>

					</a>
				</div>
				<div class="social__icon">
					<a href="<?php the_field('ssylka_na_facebook', pll_current_language('slug')); ?>">
						<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M21.3943 11.5033H17.3489V8.85009C17.3489 7.85367 18.0093 7.62137 18.4744 7.62137C18.9385 7.62137 21.3292 7.62137 21.3292 7.62137V3.24093L17.3975 3.22559C13.033 3.22559 12.0397 6.49266 12.0397 8.58339V11.5033H9.51562V16.0171H12.0397C12.0397 21.8099 12.0397 28.7896 12.0397 28.7896H17.3489C17.3489 28.7896 17.3489 21.7411 17.3489 16.0171H20.9313L21.3943 11.5033Z" fill="white"/>
						</svg>
					</a>
				</div>
			</div>
		</div>
		<div class="header__menu" id="nav__toggle">
			<span class="menu__item">
				<span class="nav-toggle"></span>
				<span class="nav-toggle__title">Menu</span>
			</span>
		</div>
	</header>
	<div class="nav" id="nav">
		<div class="nav__logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/logo-white.svg" alt="">
		</div>
		<div class="nav__inner">
			<div class="nav__title">KozLy<span class="orange">.</span></div>
			<div class="nav__subtitle">Agency</div>

			<?php 
			
			wp_nav_menu( [
				'theme_location'  => '',
				'menu'            => (pll_current_language('slug') === 'ru') ? 'RU_menu' : 'EN_menu', 
				'container'       => 'ul', 
				'menu_class'      => 'nav__cat', 
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => '',
			] );
			?>
			<!-- <ul class="nav__cat" id="nav__cat">
				<li><a href="index.html">Главная</a></li>
				<li><a href="services.html">Услуги</a></li>
				<li><a href="#contact">Контакты</a></li>
				<li><a href="who_we_are.html">О нас</a></li>
				<li><a href="cases.html">Кейсы</a></li>
			</ul> -->
		</div>
		<div class="nav__footer">
			<div class="nav__footeritem"></div>
			<a href="<?php the_field('ssylka_na_straniczu_menu', pll_current_language('slug')); ?>" target="_blank" class="nav__footeritem"><?php the_field('nazvanie_straniczy_menu', pll_current_language('slug')); ?></a>
			<a href="<?php the_field('ssylka_na_straniczu_menu_2', pll_current_language('slug')); ?>" target="_blank" class="nav__footeritem"><?php the_field('nazvanie_straniczy_menu_2', pll_current_language('slug')); ?></a>
			<div class="nav__footeritem">
				<div class="btn__menu" id="SEND_DATA"><?php pll_e('Оставить заявку'); ?></div>
			</div>
		</div>
	</div>