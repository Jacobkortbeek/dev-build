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
  <?php get_template_part( 'content', 'posts' ); ?>
</div>

<?php get_footer(); ?>
