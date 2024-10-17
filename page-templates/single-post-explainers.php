<?php
/*
Template Name: Explainers Template
Template Post Type: post
*/
get_header();
?>
<div id="single-post-explainers" class="wrapper-margin">
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<?php get_template_part("partials/post/explainers-post-header"); ?>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="post-content">
						<?php the_content(); ?>
					</div>
					<?php get_template_part( 'partials/post/related-posts' ); ?>
				</div>
			</div>
		</div>
	<?php endwhile; endif; ?>
</div>
<?php get_footer();?>
