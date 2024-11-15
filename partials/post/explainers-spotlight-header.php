<?php
$subtitle     =  get_post_meta( $post->ID, 'subtitle', true );
$pdf_url      =  get_post_meta( $post->ID, 'pdf_link', true );
$external_url =  get_post_meta( $post->ID, 'external_link', true );
$asterisk_url = GTC_THEME_URI.'/assets/images/asterisk.png';
?>
<div class="post-header wrapper-header gtc-post-header-bg">
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
        <div class="post-meta">
          <h1 class="post-title"><?php the_title(); ?></h1>
          <?php if( $subtitle ): ?>
            <h3 class="subtitle"><?php _e( $subtitle ); ?></h4>
          <?php endif; ?>
          <hr/>
          <div class="post-excerpt">
            <?php the_excerpt(); ?>
          </div>
          <?php if( $pdf_url || $external_url ): ?>
            <div class="header-actions">
              <?php if( $pdf_url ): ?>
                <a href="<?php _e( $pdf_url ); ?>" class="btn-gtc btn-gtc-download" download>
                  <span class="btn-icon" style="background-image: url(<?php _e($asterisk_url); ?>);"></span>
                  DOWNLOAD PDF VERSION
                </a>
              <?php endif; ?>
              <?php if( $external_url ): ?>
                <a href="<?php _e( $external_url ); ?>" class="btn-gtc">
                  <span class="btn-icon" style="background-image: url(<?php _e($asterisk_url); ?>);"></span>
                  VISIT WEBSITE
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
