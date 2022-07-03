<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

get_header();
?>

	<!-- <main id="primary" class="pt-20 lg:p-6 bg-primary-default my-12 rounded-md w-11/12 md:w-3/4 mx-auto grid-cols-1 md:grid-cols-3 gap-6"> -->
		<main class="main-content lg:pb-20">

			<!-- <header class="col-span-full"> -->

			<header class="page-header grid grid-cols-header-mobile md:grid-cols-header relative h-80 bg-offset bg-fixed bg-cover overflow-hidden">

			<?php 
			$header_image = get_field(get_post_type() . '_header', 'options');
			$transparent =  get_field(get_post_type() . '_page_transparent_header', 'options');

			the_archive_title( '<h1 class="page-title z-0 mb-6 w-fit col-start-2 row-start-1 place-self-end justify-self-start bg-primary-default text-large md:text-gigantic px-6 font-black font-sans uppercase">', '</h1>' );
			if($header_image):
			if($transparent):?>
			<img class="h-80 md:place-self-end col-span-full md:col-start-2 md:col-span-1 row-start-1 object-contain" src="<?php echo $header_image['url'];?>" alt="<?php echo $header_image['alt'];?>">
			<?php else: ?>

			<img class="h-80 w-full col-span-full row-start-1 object-cover" src="<?php echo $header_image['url'];?>" alt="<?php echo $header_image['alt'];?>">

			<?php endif;
			endif; ?>
			</header><!-- .page-header -->


			<div class="p-6 lg:p-12 bg-primary-default grid my-6 md:my-12 rounded-md w-11/12 md:w-3/4 mx-auto grid-cols-1 <?php if(!is_post_type_archive('resource')): echo 'md:grid-cols-3'; endif;?> gap-6">
				
			<?php $description = get_field(get_post_type() . '_page_description', "options");

			if($description && is_post_type_archive()):?>

			<p class="col-span-full"><?php echo $description;?></p>

			<?php endif;?>

			<?php if ( have_posts() ) :
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
