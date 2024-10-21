<?php
/*
Template Name: Explainers & Spotlight
Template Post Type: post
*/
get_header();
?>
<div id="post-explainers-spotlight" class="wrapper-margin">
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<?php get_template_part("partials/post/explainers-spotlight-header"); ?>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="post-content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part( 'partials/post/related-posts' ); ?>
	<?php endwhile; endif; ?>
</div>
<?php get_footer();?>
