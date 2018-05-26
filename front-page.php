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
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article class="post">
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <h2><?php echo strip_tags( get_the_excerpt() ); ?></h2>
            <ul class="post-meta no-bullet">
              <li class="author">

                  <span class="wpt-avatar small">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
                  </span>
                  by <?php the_author_posts_link(); ?>

              </li>
              <li class="cat">in <?php the_category( ' ' ); ?></li>
              <li class="date">on the <?php the_time( 'F j, y' ); ?></li>
            </ul>
            <?php if ( get_the_post_thumbnail() ) : ?>
            <div class="img-container">
              <?php the_post_thumbnail( 'large' ); ?>
            </div>
          <?php endif; ?>
          </article>
        <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no pages found.' ); ?>
        <?php endif; ?>
</div>

<?php get_footer(); ?>
