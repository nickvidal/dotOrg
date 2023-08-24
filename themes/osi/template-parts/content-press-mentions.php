<?php
/**
 * Template part for displaying press mentions
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package osi
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php get_template_part( 'template-parts/header-featured-image' ); ?>

	<div class="entry-content post--content">
		<?php if ( get_post_type() !== sugar_calendar_get_event_post_type_id() ) { ?>

			<div class="entry-meta post--byline">
				<?php osi_posted_on(); ?>
				<?php echo wp_kses_post( osi_get_single_taxonomy_terms_links( $post, 'category' ) ); ?>
			</div><!-- .entry-meta -->

		<?php } ?>
		<?php
		$press_title = get_field( 'article_url' ) ?
		sprintf(
			'<a href="%s" rel="bookmark" target="_blank">%s</a>',
			esc_url( get_field( 'article_url' ) ),
			esc_html( get_the_title() )
		) :
		esc_html( get_the_title() );

		echo '<h1 class="entry-title post--title">' . wp_kses_post( $press_title ) . '</h1>';
		?>

		<?php the_content(); ?>
	</div><!-- .entry-content -->
	<section id="pre-footer">
		<?php get_template_part( 'template-parts/nav-postname-pager' ); ?>
		<?php //get_template_part( 'template-parts/email-block' ); ?>
	</section>

</article><!-- #post-<?php the_ID(); ?> -->
