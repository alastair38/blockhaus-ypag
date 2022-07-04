<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package blockhaus
 */

get_header();
?>

	<main id="primary" class="main-content space-y-6 md:space-y-12 mb-12">

		<?php
		
		$header_image = get_field('search_header', 'options');
		$transparent =  get_field('search_page_transparent_header', 'options');?>

			<header class="entry-header grid grid-cols-header-mobile md:grid-cols-header relative h-80 bg-offset bg-fixed bg-cover overflow-hidden">

	<h1 class="leading-none py-3 z-0 mb-6 w-fit col-start-2 row-start-1 place-self-end justify-self-start bg-primary-default text-lg md:text-gigantic px-6 font-black uppercase">
	<?php
	/* translators: %s: search query. */
	printf( esc_html__( 'Search Results for: %s', 'blockhaus' ), '<span class="underline decoration-green-400 decoration-4">' . get_search_query() . '</span>' );
	?>
</h1>

<?php 
				if($header_image):
				if($transparent): ?>
				<img class="h-80 md:place-self-end col-span-full md:col-start-2 md:col-span-1 row-start-1 object-contain object-right" src="<?php echo $header_image['url'];?>" alt="<?php echo $header_image['alt'];?>">

				<?php endif;
				endif; ?>
	</header><!-- .page-header -->

	<div class="p-6 md:p-12 w-11/12 md:w-3/4 bg-primary-default rounded-md mx-auto space-y-6">

	<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'blockhaus' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'blockhaus' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'blockhaus' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>

	</div>
	
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
