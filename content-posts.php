<?php

  $num_posts = ( is_front_page() ) ? 3 : -1;

  $args = array(
    'post_type' => 'post',
    'posts_per_page' => $num_posts
  );

  $query = new WP_Query( $args );

?>

<div class="container homeBlog">
  <div class="row">



  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
    <div class="col-md-4 blogHomePost matchHeight">
      <div class="padding boxShadow">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <br>
        <h1><?php the_title(); ?></h1>
        <br>
        <p><?php echo strip_tags( get_the_excerpt() ); ?></p>
      </div>

    </div>
  <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</div>
