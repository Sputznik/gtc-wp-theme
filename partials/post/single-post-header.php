<?php
  $pdf_url      =  get_post_meta( $post->ID, 'pdf_link', true );
  $pdf_url_button_text =  get_post_meta( $post->ID, 'pdf_link_button_text', true );
  $external_url =  get_post_meta( $post->ID, 'external_link', true );
  $external_url_button_text =  get_post_meta( $post->ID, 'external_link_button_text', true );
?>
<div class="post-header wrapper-header gtc-post-header-bg">
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
        <div class="post-meta">
          <h1><?php the_title(); ?></h1>
          <span><?php the_time( 'j F Y' ); ?></span>
          <div class="post-excerpt">
            <?php the_excerpt(); ?>
          </div>
          <?php if( $pdf_url || $external_url ): ?>
            <div class="header-actions">
              <?php if( $pdf_url ): ?>
                <a href="<?php _e( $pdf_url ); ?>" class="btn-gtc btn-gtc-download" download style="text-transform: uppercase;">
                  <span class="btn-icon" style="background-image: url(<?php _e($asterisk_url); ?>);"></span>
                  <?php _e( !empty($pdf_url_button_text) ? $pdf_url_button_text : 'DOWNLOAD PDF VERSION' ); ?>
                </a>
              <?php endif; ?>
              <?php if( $external_url ): ?>
                <a href="<?php _e( $external_url ); ?>" class="btn-gtc" style="text-transform: uppercase;">
                  <span class="btn-icon" style="background-image: url(<?php _e($asterisk_url); ?>);"></span>
                  <?php _e( !empty($external_url_button_text) ? $external_url_button_text : 'VISIT WEBSITE' ); ?>
                </a>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-sm-5">
        <?php get_template_part( 'partials/post/featured-image' ); ?>
      </div>
    </div>
  </div>
</div>
