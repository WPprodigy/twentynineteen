<?php
/**
 * The template for displaying Author info
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

if ( (bool) get_the_author_meta( 'description' ) ) : ?>
<div class="author-description">
	<h2 class="author-title">
		<span class="author-heading"><?php echo esc_html( sprintf( __( 'Published by %s', 'twentynineteen' ), get_the_author() ) ); ?></span>
	</h2>
	<p class="author-bio">
		<?php the_author_meta( 'description' ); ?>
		<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
			<?php esc_html_e( 'View more posts ', 'twentynineteen' ); ?>
		</a>
	</p><!-- .author-bio -->
<div><!-- .author-description -->
<?php endif; ?>
