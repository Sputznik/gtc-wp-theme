<?php
$logos = $instance['logos'];
?>
<div class="gtc-explainers-content">
  <?php echo $instance['produced_by']; ?>
  <?php if( count( $logos ) ): ?>
    <div class="logos">
      <?php foreach( $logos as $item ): $title = get_the_title( $item['site_logo'] ); ?>
        <div class="logo-wrapper">
          <a href="<?php _e( $item['site_url'] ); ?>" title="<?php _e( $title ); ?>">
            <?php echo wp_get_attachment_image( $item['site_logo'], "thumbnail", "", array( "alt" => $title ) ); ?>
          </a>
        </div>
      <?php endforeach;?>
    </div>
  <?php endif;?>
  <?php echo $instance['written_by']; ?>
  <?php echo $instance['republished_by']; ?>
</div>
