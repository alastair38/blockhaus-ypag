<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blockhaus
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page-blockhaus" class="h-full flex flex-col">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blockhaus' ); ?></a>

	<header id="masthead" class="bg-gray-50 fixed top-0 left-0 right-0 z-50 p-2 lg:relative md:bg-transparent flex justify-between lg:p-6 items-center">
		<div class="flex items-center gap-2">
			<svg class="h-6 w-6 md:h-12 md:w-12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="500" zoomAndPan="magnify" viewBox="0 0 375 374.999991" height="500" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><g/><clipPath id="id1"><path d="M 28.488281 13.296875 L 345.433594 13.296875 L 345.433594 330.242188 L 28.488281 330.242188 Z M 28.488281 13.296875 " clip-rule="nonzero"/></clipPath></defs><g clip-path="url(#id1)"><path fill="#4ade80" d="M 186.960938 13.296875 C 99.441406 13.296875 28.488281 84.25 28.488281 171.769531 C 28.488281 259.292969 99.441406 330.242188 186.960938 330.242188 C 274.484375 330.242188 345.433594 259.292969 345.433594 171.769531 C 345.433594 84.25 274.484375 13.296875 186.960938 13.296875 " fill-opacity="1" fill-rule="nonzero"/></g><g fill="#504f4f" fill-opacity="1"><g transform="translate(141.345372, 361.644047)"><g><path d="M 46.15625 -1.71875 C 43.820312 -1.414062 41.675781 -1.96875 39.71875 -3.375 C 37.769531 -4.78125 36.644531 -6.644531 36.34375 -8.96875 L 32.6875 -42.8125 C 31.425781 -57.988281 30.316406 -69.289062 29.359375 -76.71875 C 28.484375 -83.445312 26.148438 -93.289062 22.359375 -106.25 C 18.359375 -118.9375 15.890625 -128.878906 14.953125 -136.078125 C 13.816406 -144.890625 11.234375 -154.816406 7.203125 -165.859375 C 3.179688 -176.910156 -1.476562 -187.40625 -6.78125 -197.34375 C -11.789062 -206.84375 -16.3125 -217.164062 -20.34375 -228.3125 C -24.382812 -239.46875 -26.960938 -249.335938 -28.078125 -257.921875 C -28.285156 -259.554688 -27.535156 -261.070312 -25.828125 -262.46875 C -24.128906 -263.863281 -22.226562 -264.695312 -20.125 -264.96875 C -17.570312 -265.300781 -14.796875 -262.957031 -11.796875 -257.9375 C -8.222656 -252.238281 -4.457031 -244.101562 -0.5 -233.53125 C 3.457031 -222.96875 5.8125 -216.671875 6.5625 -214.640625 L 14.1875 -191.1875 L 19.65625 -176.34375 C 19.863281 -180.144531 19.8125 -185.085938 19.5 -191.171875 C 18.40625 -210.617188 18.070312 -226.863281 18.5 -239.90625 C 19 -248.925781 19.988281 -255.894531 21.46875 -260.8125 C 23.125 -266.21875 25.578125 -269.128906 28.828125 -269.546875 C 35.085938 -270.359375 38.363281 -269.601562 38.65625 -267.28125 C 40.375 -254.0625 40.117188 -234.207031 37.890625 -207.71875 C 35.648438 -181.226562 35.398438 -161.253906 37.140625 -147.796875 L 37.171875 -142.15625 C 37.148438 -138.613281 37.304688 -136.503906 37.640625 -135.828125 L 38.359375 -130.265625 C 39.648438 -120.285156 41.976562 -105.007812 45.34375 -84.4375 L 52.03125 -38.21875 L 53.78125 -30.328125 L 55.546875 -22.0625 L 56.671875 -13.359375 C 57.035156 -10.566406 56.1875 -8.03125 54.125 -5.75 C 52.0625 -3.476562 49.40625 -2.132812 46.15625 -1.71875 Z M 46.15625 -1.71875 "/></g></g></g><g fill="#504f4f" fill-opacity="1"><g transform="translate(152.367912, 357.499001)"><g><path d="M 32.203125 7.421875 C 29.671875 6.984375 27.84375 5.535156 26.71875 3.078125 C 25.601562 0.628906 25.332031 -2.207031 25.90625 -5.4375 L 36.796875 -63.390625 C 42.429688 -91.390625 46.601562 -113.113281 49.3125 -128.5625 C 58.738281 -182.269531 62.960938 -223.941406 61.984375 -253.578125 C 66.367188 -258.253906 71.21875 -260.128906 76.53125 -259.203125 C 85.050781 -257.703125 92.488281 -254.429688 98.84375 -249.390625 C 105.207031 -244.359375 110.132812 -238.210938 113.625 -230.953125 C 120.257812 -216.003906 122.117188 -200.234375 119.203125 -183.640625 C 116.171875 -166.359375 109.769531 -151.566406 100 -139.265625 C 90.238281 -126.960938 77.660156 -118.238281 62.265625 -113.09375 L 56.828125 -78.046875 L 54.296875 -59.59375 C 53.847656 -55.632812 52.972656 -49.972656 51.671875 -42.609375 C 49.648438 -27.046875 47.789062 -14.425781 46.09375 -4.75 C 45.320312 -0.363281 43.789062 2.929688 41.5 5.140625 C 39.21875 7.347656 36.117188 8.109375 32.203125 7.421875 Z M 64.5 -129.8125 C 74.976562 -136.757812 83.171875 -144.523438 89.078125 -153.109375 C 94.984375 -161.703125 98.96875 -171.875 101.03125 -183.625 L 101.09375 -183.96875 C 102.019531 -189.269531 102.613281 -196.054688 102.875 -204.328125 C 102.664062 -207.210938 101.882812 -210.195312 100.53125 -213.28125 C 99.175781 -216.375 98.421875 -218.171875 98.265625 -218.671875 C 97.054688 -221.253906 93.425781 -225.578125 87.375 -231.640625 L 79.515625 -239.796875 C 77.453125 -228.035156 74.945312 -209.703125 72 -184.796875 Z M 64.5 -129.8125 "/></g></g></g></svg>
	
				<span class="has-extra-large-font-size font-black"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
			
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation flex gap-0 lg:gap-6 items-center md:shadow-md py-2 h-10 md:bg-gray-50 lg:px-6 overflow-hidden md:border-gray-400 md:rounded-full">
		
			<button class="menu-toggle text-sm flex items-center gap-1 font-sans lg:hidden font-bold uppercase bg-white px-2 shadow-md rounded-full" aria-controls="primary-menu" aria-expanded="false"><span id="mobile-menu-text"><?php esc_html_e( 'Menu', 'blockhaus' ); ?></span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
</svg></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'		 => 'flex flex-col text-2xl lg:text-base lg:flex-row absolute lg:relative left-0 right-0 top-0 -z-10 lg:z-0 bg-gray-100 -translate-y-full lg:translate-y-0 invisible lg:visible lg:bg-transparent gap-4 lg:gap-6 h-screen lg:h-auto justify-center items-center ml-auto ease-in-out duration-200'
				)
			);
			?>
		
		</nav><!-- #site-navigation -->

    
<?php if( is_user_logged_in() ) {

echo '<div class="flex flex-col fixed bottom-4 right-4 w-fit gap-2 z-50 items-center justify-center">';

  blockhaus_post_edit_link();
  
  blockhaus_admin_link();

  blockhaus_logout_link();

echo '</div>';
}?>
	</header><!-- #masthead -->
