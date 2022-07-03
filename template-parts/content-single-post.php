<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

<article id="post-<?php the_ID(); ?>" class="w-full space-y-6 md:space-y-12">
<header class="entry-header grid grid-cols-header-mobile md:grid-cols-header relative h-80 bg-offset bg-fixed bg-cover overflow-hidden">

<?php 
$transparent =  get_field('transparent_image_layout');

the_title( '<h1 class="page-title z-0 mb-6 w-fit col-start-2 row-start-1 place-self-end justify-self-start bg-primary-default text-lg md:text-gigantic px-6 font-black uppercase">', '</h1>' );
if ( has_post_thumbnail() ):
if($transparent):?>
<?php the_post_thumbnail( 'medium', ['class' => 'h-80 md:place-self-end col-span-full md:col-start-2 md:col-span-1 row-start-1 object-contain'] ); ?>

<?php else: ?>
	<?php the_post_thumbnail( 'full', ['class' => 'h-80 w-full col-span-full row-start-1 object-cover'] ); ?>

<?php endif;
endif;

if(!has_post_thumbnail()):
	$default_img = get_field(get_post_type() . '_header', 'options');
	echo wp_get_attachment_image( $default_img['id'], 'full', "", array( 'class' => 'h-80 md:place-self-end col-span-full md:col-start-2 md:col-span-1 row-start-1 object-cover', 'loading' => false ));
endif;
?>
</header><!-- .page-header -->



<div class="space-y-6 p-6 md:p-12 w-11/12 md:w-3/4 bg-primary-default rounded-md mx-auto overflow-hidden">
		<?php
	
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blockhaus' ),
				'after'  => '</div>',
			)
		);
		?>

<?php
		
		$external_link = get_field('external_link');
		$external_site = get_field('external_site');?>
		
		<?php if($external_link):?>
			<div class="font-bold mt-6">This article was originally published at <?php echo $external_site;?></div>
		<?php endif;?>
		
		<?php if($external_link):?>
			<a class="py-1 px-4 border border-current inline-flex items-center gap-2 mt-6 shadow-retro hover:bg-white transition-colors duration-200 bg-offset font-bold" 
			href="<?php echo $external_link;?>" rel="external">View <?php echo get_post_type();?>

				<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					<path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
				</svg>

			</a>

		<?php endif;?>

	<?php if(is_singular( array('post', 'project') )):?>
	<div class="entry-meta italic">
				<?php
				blockhaus_posted_on();
				blockhaus_posted_by();
				?>
	</div><!-- .entry-meta -->
	<?php endif;?>
	
	<?php $social_sharing = get_field('sharing_enabled');
	if($social_sharing):
	// if sharing is enabled on the content item, show the social media share buttons
	get_template_part( 'template-parts/content', 'share-buttons' );

	endif;?>
	</div><!-- .entry-content -->

	

</article><!-- #post-<?php the_ID(); ?> -->
