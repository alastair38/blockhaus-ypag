<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

<article id="post-<?php the_ID(); ?>" class="w-full space-y-6 md:space-y-12 mb-12">
	
	<header class="entry-header grid grid-cols-header-mobile md:grid-cols-header relative h-80 bg-offset bg-fixed bg-cover overflow-hidden">

	<?php 
	$transparent =  get_field('transparent_image_layout');

	the_title( '<h1 class="page-title leading-none py-3 z-0 mb-6 w-fit col-start-2 row-start-1 place-self-end justify-self-start bg-primary-default text-lg md:text-gigantic px-6 font-black uppercase">', '</h1>' );
	if ( has_post_thumbnail() ):
	if($transparent):?>
	<?php the_post_thumbnail( 'large', ['class' => 'h-80 md:place-self-end col-span-full md:col-start-2 md:col-span-1 row-start-1 object-contain object-right'] ); ?>

	<?php else: ?>
		<?php the_post_thumbnail( 'full', ['class' => 'h-80 w-full col-span-full row-start-1 object-cover'] ); ?>

	<?php endif;
	endif;

	if ( !has_post_thumbnail() ):

	endif;
	?>
	</header><!-- .page-header -->

	<div class="p-6 md:p-12 w-11/12 md:w-3/4 bg-primary-default rounded-md mx-auto space-y-6">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blockhaus' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
