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
        </div>
      </div>
      <div class="col-sm-5">
        <?php get_template_part( 'partials/post/featured-image' ); ?>
      </div>
    </div>
  </div>
</div>
