<?php
  $thumbnail_id  = get_post_thumbnail_id( $post->ID );
  $thumbnail     = wp_get_attachment_image_src( $thumbnail_id, 'full' )[0];
?>
<?php if( !empty( $thumbnail ) ): $thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true ); ?>
  <div class="orbit-thumbnail-bg" style="background-image: url( <?php _e( $thumbnail );?> );">
    <img src="<?php _e( $thumbnail ); ?>" alt="<?php _e( $thumbnail_alt ? $thumbnail_alt : 'Featured Image' ); ?>" class="screen-reader-featured-img" />
  </div>
<?php endif; ?>
