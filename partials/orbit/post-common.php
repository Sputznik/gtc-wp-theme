<?php
  $permalink      = get_the_permalink();
  $thumbnail_id   = get_post_thumbnail_id( $post->ID );
  $thumbnail      = wp_get_attachment_image_src( $thumbnail_id, 'full' )[0];
  $background_img = !empty( $thumbnail ) ? 'style="background-image:url('.$thumbnail.');"' : "";
?>
<div class="orbit-thumbnail-bg" <?php _e( $background_img ); ?>>
  <?php if( $post->post_status == 'future' ): ?>
    <div class="post-status">Upcoming</div>
  <?php endif; ?>
  <?php if( !empty( $thumbnail ) ): $thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true ); ?>
    <img src="<?php _e( $thumbnail ); ?>" alt="<?php _e( $thumbnail_alt ? $thumbnail_alt : 'Featured Image' ); ?>" class="screen-reader-featured-img" />
  <?php endif;?>
  <a href="<?php _e( $permalink );?>"></a>
</div>
<div class="post-desc">
  <div class="post-categories"><?php the_category(', '); ?></div>
  <h3 class="post-title"><a href="<?php _e( $permalink );?>"><?php the_title();?></a></h3>
  <div class="post-excerpt"><?php the_excerpt(); ?><a class="read-more" href="<?php _e( $permalink );?>">Read more</a></div>
  <span class="meta text-capitalize"><?php the_time( 'j F Y' );?></span>
</div>
