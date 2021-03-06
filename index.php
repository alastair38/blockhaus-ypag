<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

get_header();
?>

	<!-- <main id="primary" class="pt-20 lg:p-6 bg-primary-default my-12 rounded-md w-11/12 md:w-3/4 mx-auto grid-cols-1 md:grid-cols-3 gap-6"> -->

	<main class="main-content lg:pb-20">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :?>
			
			<header class="entry-header grid grid-cols-header-mobile md:grid-cols-header relative h-80 bg-offset bg-fixed bg-cover overflow-hidden">

				<?php 
				$header_image = get_field(get_post_type() . '_header', 'options');
				$transparent =  get_field(get_post_type() . '_page_transparent_header', 'options');?>


				<h1 class="page-title z-0 mb-6 w-fit col-start-2 row-start-1 place-self-end justify-self-start bg-primary-default text-large md:text-gigantic px-6 font-black uppercase"><?php single_post_title();?></h1>
				<?php 
				if($header_image):
				if($transparent): ?>
				<img class="h-80 md:place-self-end col-span-full md:col-start-2 md:col-span-1 row-start-1 object-contain object-right" src="<?php echo $header_image['url'];?>" alt="<?php echo $header_image['alt'];?>">
				<?php else: ?>
				
				<img class="h-80 w-full col-span-full row-start-1 object-cover" src="<?php echo $header_image['url'];?>" alt="<?php echo $header_image['alt'];?>">

				<?php endif;
				endif; ?>
			</header><!-- .page-header -->

				<div class="p-6 lg:p-12 bg-primary-default grid my-6 md:my-12 rounded-md w-11/12 md:w-3/4 mx-auto grid-cols-1 md:grid-cols-3 gap-6">

				<?php
			endif;

			$description = get_field(get_post_type() . '_page_description', "options");

			if($description && is_home()):?>

			
			<p class="col-span-full"><?php echo $description;?></p>

			<?php endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
