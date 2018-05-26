<?php

  $num_posts = ( is_front_page() ) ? 2 : -1;

  $args = array(
    'post_type' => 'post',
    'posts_per_page' => $num_posts
  );

  $query = new WP_Query( $args );

?>

<div class="container homeBlog">
  <div class="row">



  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
    <div class="col-md-4 blogHomePost">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
    </div>
  <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</div>
