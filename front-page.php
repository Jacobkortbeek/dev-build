<?php get_header(); ?>

<div class="container hero">
  <div class="row">
    <div class="col-md-12 logo-hero">
      <?php $band_logo = get_field( 'band_logo', 'options' ); ?>
      <?php if ( $band_logo ) { ?>
         <img src="<?php echo $band_logo['url']; ?>" alt="<?php echo $band_logo['alt']; ?>" />
      <?php } ?>
    </div>
    <div class="col-md-12">
      <<?php $text = get_field( 'text_options', 'options' );
          if( $text ): ?><?php echo $text['heading_h_tag']; ?>
       class="heading"><?php the_field( 'head_title', 'option' ); ?></<?php echo $text['heading_h_tag']; ?>  <?php endif; ?> >
    </div>
  </div>
</div>

<div class="container aboutUsHome boxShadow">
  <div class="row">
    <div class="col-md-12 aboutHeading">
      <?php $aboutHeader = get_field( 'about_section_heading' );
        if( $aboutHeader ): ?><<?php echo $text['sub_heading_tag']; ?>>
        <?php echo $aboutHeader ?>
        </<?php echo $text['sub_heading_tag']; ?>>
      <?php endif; ?>
    </div>
    <div class="col-md-12 aboutText">
      <?php $aboutText = get_field( 'about_section_text' );
        if( $aboutHeader ): ?><p>
        <?php echo $aboutText ?>
      </p>
      <?php endif; ?>
    </div>
  </div>
</div>

<div class="container blogPosts">
  <?php

  $num_posts = ( is_front_page() ) ? 2 : -1;

  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => $num_posts
  );

  $query = new WP_Query( $args );

?>

<section class="row no-max pad">
  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
    <div class="small-6 medium-4 large-3 columns grid-item">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
    </div>
  <?php endwhile; endif; wp_reset_postdata(); ?>
</section>
</div>

<?php get_footer(); ?>
