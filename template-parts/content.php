<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

<article id="post-<?php the_ID(); ?>" class="relative p-6 flex flex-col has-neutral-light-100-background-color rounded-md shadow-md gap-6">
	<header class="entry-header">
		<?php

		if( strtotime( $post->post_date ) > strtotime('-7 day') ) {
			echo '<span aria-label="New content" class="flex w-fit mb-3 text-sm bg-accent px-2 rounded-full">new</span>';
		}

		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="has-large-font-sizefont-bold">', '</h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta text-sm italic">
				<?php
				blockhaus_posted_on();
				blockhaus_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; 



		
		?>
	</header><!-- .entry-header -->

	<?php 

	if(has_post_thumbnail() && !is_post_type_archive('resource')):
	blockhaus_post_thumbnail('landscape'); 
	endif;


	if(!has_post_thumbnail() && !is_post_type_archive('resource')):
	$default_img = get_field(get_post_type() . '_header', 'options');
	echo wp_get_attachment_image( $default_img['id'], 'landscape', "", array( 'class' => 'w-full aspect-[80/45] object-contain' ));
	
	endif;
	?>
	<div class="entry-content">
		<?php

		

		if ( has_excerpt() ) {
			echo '<div class="text-sm">';
			the_excerpt();#
			echo '</div>';
		}
		
		?>
	</div>

	<footer class="mt-auto">

		<?php
		
		$external_link = get_field('external_link');
		$external_site = get_field('external_site');?>
		
		<?php if($external_link):?>
			<div class="text-sm font-bold">Published at <?php echo $external_site;?></div>
		<?php endif;?>
		
		<?php if($external_link):?>
			<a class="py-1 px-4 border border-current inline-flex items-center gap-2 mt-6 shadow-retro hover:bg-primary-default transition-colors duration-200 bg-offset font-bold" 
			href="<?php echo $external_link;?>" rel="external">View <?php echo get_post_type();?>

				<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					<path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
				</svg>

			</a>

		<?php else:?>

			<a class="py-1 px-4 border border-current inline-flex mt-6 shadow-retro hover:bg-primary-default transition-colors duration-200 bg-offset font-bold" 
			href="<?php echo esc_url( get_permalink() );?>" rel="bookmark">View <?php echo get_post_type();?></a>

		<?php endif;?>
	</footer>

</article><!-- #post-<?php the_ID(); ?> -->
